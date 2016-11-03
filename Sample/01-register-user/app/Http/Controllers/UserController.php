<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function register()
	{
       return view('pages.register');
    }

    public function signup(Request $request)
	{
		$appId = "YOUR-APPID";
		$appKey = "YOUR-APPKEY";
		$firstname = $request->input('firstname');
		$lastname = $request->input('lastname');
		$email = $request->input('email');
		$password = $request->input('password');

		$respAuth = \Guzzle::post('https://api.mesosfer.com/api/v2/users', [
		    'json'    => ['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'password' => $password],
		    'headers' => ['X-Mesosfer-AppId' => $appId, 'X-Mesosfer-AppKey' => $appKey]
		]);
		
		$bodyAuth = (string) $respAuth->getBody();
		$auth = json_decode($bodyAuth);

		echo "<pre>";
		var_dump($auth);
		echo "</pre>";
	}
}