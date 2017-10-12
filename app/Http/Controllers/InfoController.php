<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;
use App\Product;
use App\Option;

class InfoController extends Controller
{

  public function saveSearchData (Request $request){
    $userID = $request->input('userID');
    $riskLevel = $request->input('riskLevel');
    $minInvestment = $request->input('minInvestment');
    $isStock = $request->input('isStock');
    $isBond = $request->input('isBond');
    $isMutualFund = $request->input('isMutualFund');
    $isETF = $request->input('isETF');
    $isRetirement = $request->input('isRetirement');
    $isIndexFund = $request->input('isIndexFund');

    $userID = 1;

    $checkOptions = Option::where('userID', '=', $userID)->first();

    if (!empty($checkOptions)) {
      $temp = Option::where('userID', '=', $userID)
            ->update(['riskLevel' => $riskLevel, 'minInvestment' => $minInvestment, 'isStock' => $isStock, 'isBond' => $isBond, 'isMutualFund' => $isMutualFund, 'isETF' => $isETF, 'isRetirement' => $isRetirement, 'isIndexFund' => $isIndexFund ]);
      return Response::json(['success' => 'Your search criteria has been updated.', 'temp' => $temp]);
    }
    else {
      $option = new Option;
      $option->userID = $userID;
      $option->isStock = $isStock;
      $option->isBond = $isBond;
      $option->isMutualFund = $isMutualFund;
      $option->isETF = $isETF;
      $option->isIndexFund = $isIndexFund;
      $option->isRetirement=$isRetirement;
      $option->minInvestment=$minInvestment;
      $option->riskLevel=$riskLevel;
      $option->save();
      return Response::json(['success' => 'Your search criteria has been saved.']);
    }


  }

  public function collectSearchData(Request $request){
    $userID = $request->input('userID');

    $searchData = Option::where('userID', '=', $userID)->get();

    return Response::json(['searchData' => $searchData]);
  }


  public function getProducts(Request $request, $type = "name", $order = "asc")
  {
    $rules = [
      'userID' => 'required',
      'minInvestment'=> 'required',
      'riskLevel'=> 'required'
    ];

    $validator = Validator::make(Purifier::clean($request->all()), $rules);
    if($validator->fails())
    {
      return Response::json(['error' => "The fields Risk level and Minimum investmente are required"]);
    }

    $userID = $request->input('userID');
    $riskLevel = $request->input('riskLevel');
    $minInvestment = $request->input('minInvestment');
    $isStock = $request->input('isStock');
    $isBond = $request->input('isBond');
    $isMutualFund = $request->input('isMutualFund');
    $isETF = $request->input('isETF');
    $isRetirement = $request->input('isRetirement');
    $isIndexFund = $request->input('isIndexFund');
    $searchCriteria = [];

    $getProducts = Product::leftJoin('companies', 'companyID', '=', 'companies.id');

    if ($riskLevel != NULL) {
      $getProducts->where('products.riskLevel', '=', 1);
      $searchCriteria[] = $riskLevel;
    }

    if ($minInvestment != NULL) {
      $getProducts->where('products.minInvestment', '<=', $minInvestment);
      $searchCriteria[] = $minInvestment;
    }

    $getProducts = $getProducts->select('companies.name', 'companies.description', 'companies.website','products.id', 'products.name', 'products.summary', 'products.riskLevel', 'products.fees', 'products.performance',
    'products.minInvestment', 'products.physicalLocationAvailable', 'products.specialOffersAvailable', 'products.isStock', 'products.isBond', 'products.isMutualFund', 'products.isETF', 'products.isRetirement', 'products.isIndexFund')
    ->orderby('products.'.$type, $order)
    ->get();

    $resultProducts = [];

    if($isStock != NULL && $isStock != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isStock == $isStock) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'Stocks';
    }
    if($isBond != NULL && $isBond != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isBond == $isBond) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'Bonds';
    }
    if($isMutualFund != NULL && $isMutualFund != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isMutualFund == $isMutualFund) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'Mutual funds';
    }
    if($isETF != NULL && $isETF != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isETF == $isETF) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'EX Trade funds';
    }
    if($isRetirement != NULL && $isRetirement != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isRetirement == $isRetirement) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'Retirement';
    }
    if($isIndexFund != NULL && $isIndexFund != 0) {
      foreach($getProducts as $key => $product)
      {
        if($product->isIndexFund == $isIndexFund) {
          $resultProducts[] = $product;
        }
      }
      $searchCriteria[] = 'Index funds';
    }

    if (empty($resultProducts)) {
      $resultProducts = $getProducts;
    }


    if (count($resultProducts) > 0){
      return Response::json(['messageNum' => '1', 'searchCriteria' => $searchCriteria, 'resultProducts' => $resultProducts]);
    }
    else {

      return Response::json(['resultProducts' => $resultProducts, 'message' => 'We currently have no products that match your search criteria', 'messageNum' => '0', 'searchCriteria' => $searchCriteria]);
    }
  }





}
