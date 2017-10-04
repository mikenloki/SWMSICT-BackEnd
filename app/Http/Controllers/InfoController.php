<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;

class InfoController extends Controller
{
  public function saveOptions(Request $request)
  {
    $rules = [
      'minInvestment'=> 'required',
      'riskLevel'=> 'required'
    ];

    $validator = Validator::make(Purifier::clean($request->all()), $rules);
    if($validator->fails())
    {
      return Response::json(['error' => 'Missing fields']);
    }

    $stocks = $request->input('stocks');
    $bonds = $request->input('bonds');
    $mutualFunds = $request->input('mutualFunds');
    $etfs = $request->input('etfs');
    $indexFunds = $request->input('indexFunds');
    $retirement = $request->input('retirement');
    $minInvestment = $request->input('minInvestment');
    $riskLevel = $request->input('riskLevel');

    $options = new Option;

    $options->stocks = $stocks;
    $options->bonds = $bonds;
    $options->mutualFunds = $mutualFunds;
    $options->etfs = $etfs;
    $options->indexFunds = $indexFunds;
    $options->retirement = $retirement;
    $options->minInvestment = $minInvestment;
    $options->riskLevel = $riskLevel;
    $options->save();

    return Response::json(['success' => "Data saved"]);
  }
<<<<<<< HEAD
=======


  public function displayResults()
  {

  }

  public function filterResults()
  {

  }
>>>>>>> e1dccb95eb6c7f24887ad9822dafdf438193877c
}
