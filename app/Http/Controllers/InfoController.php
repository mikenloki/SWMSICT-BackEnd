<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;

class InfoController extends Controller
{
  public function store(Request $request)
  {
    $rules = [
      'age'=> 'required'
      'phone'=> 'required'
      'email'=> 'required'
    ];
    $validator = Validator::make(Purifier::clean($request->all()), $rules);
    if($validator->fails())
    {
      return Response::json(['error' => 'Please fill out all fields.']);
    }
    $age = $request->input('age');
    $recurring = $request->input('recurring');
    $email = $request->input('email');
    $address01 = $request->input('address01');
    $address02 = $request->input('address02');
    $city = $request->input('city');
    $state = $request->input('state');
    $zip = $request->input('zip');
    $allowContact = $request->input('allowContact');

    $users = new User;

    $users->name = $name;
    $users->phone = $phone;
    $users->email = $email;
    $users->address01 = $address01;
    $users->address02 = $address02;
    $users->city = $city;
    $users->state = $state;
    $users->zip = $zip;
    $users->allowContact = $allowContact;

    $users->save();


    return Response::json(['success' => "Your data was successfully accepted. Welcome Aboard!"]);
  }
}
