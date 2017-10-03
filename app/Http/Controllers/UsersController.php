<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
use Purifier;
use Hash;
use Auth;
use JWTAuth;

use App\User;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('jwt.auth', ['only' => ['signIn', 'getUser', 'signOut']]);
  }

  public function signUp(Request $request)
  {
    $rules = [
      'email'=> 'required',
      'password'=> 'required',
      'firstName'=> 'required',
      'lastName'=> 'required',
      'phoneNum'=> 'required'
    ];

    $validator = Validator::make(Purifier::clean($request->all()), $rules);
    if($validator->fails())
    {
      return Response::json(['error' => 'Please fill out all fields.']);
    }/*End If.*/

    $password = $request->input('password');
    $email = $request->input('email');
    $firstName = $request->input('firstName');
    $lastName = $request->input('lastName');
    $phoneNum = $request->input('phoneNum');
    $address01 = $request->input('address01');
    $address02 = $request->input('address02');
    $city = $request->input('city');
    $state = $request->input('state');
    $zip = $request->input('zip');
    $allowContact = $request->input('allowContact');

    /*checks to see if username already exists.*/
    $duplicate = User::where('email', '=', $email)->select('id')->first();
    if(empty($duplicate))
    {
      $password = Hash::make($password);

      $users = new User;
      $users->password = $password;
      $users->email = $email;
      $users->firstName = $firstName;
      $users->lastName = $lastName;
      $users->phoneNum = $phoneNum;
      $users->address01 = $address01;
      $users->address02 = $address02;
      $users->city = $city;
      $users->state = $state;
      $users->zip = $zip;
      $users->allowContact = $allowContact;

      $users->save();

      return Response::json(['success' => 'User Signed Up. Welcome Aboard!']);
    }/*End If.*/
    else
    {
      return Response::json(['error' => 'Username Unavailable']);
    }/*End Else. */

  }/*End Function.*/

  public function signIn(Request $request)
  {
    $rules = [
      'email' => 'required',
      'password' => 'required'
    ];

    $validator = Validator::make(Purifier::clean($request->all()), $rules);

    if($validator->fails())
    {
      return Response::json(['error' => 'Missing field']);
    }/*End If.*/

    $email = $request->input('email');
    $password = $request->input('password');
    $credentials = compact("email", "password");

    $token = JWTAuth::attempt($credentials);

    if($token ===  false)
    {
      return Response::json(['error' => 'Invalid Credentials']);
    }/*End If.*/
    else
    {
      return Response::json(['token' => $token]);
    }/*End Else.*/
  }/*End Function.*/

  public function getUser()
  {
    $user = Auth::user();
    $user = User::find($user->id);

    $firstName = $user->firstName;

    return Response::json(['firstName' => $firstName]);
  }/*End Function.*/

  public function signOut()
  {
    JWTAuth::invalidate();

    return Response::json(['success' => 'goodbye']);
  }/*End Function.*/

}/* End Class. */
