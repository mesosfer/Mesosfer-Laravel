<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

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

	public function login()
	{
		if(Session::get('userdata'))
			return redirect('animal');

		return view('pages.login');
	}

	public function signin(Request $request)
	{
		$appId = "YOUR-APPID";
		$appKey = "YOUR-APPKEY";
		$email = $request->input('email');
		$password = $request->input('password');

		$respAuth = \Guzzle::post('https://api.mesosfer.com/api/v2/users/signin', [
		    'json'    => ['email' => $email, 'password' => $password],
		    'headers' => ['X-Mesosfer-AppId' => $appId, 'X-Mesosfer-AppKey' => $appKey]
		]);

		$bodyAuth = (string) $respAuth->getBody();
		$auth = json_decode($bodyAuth);

		$userdata = array(
			'accessToken' => $auth->accessToken,
			'object_id'	=> $auth->object_id,
			'token_type' => $auth->token_type 
		);

		Session::put('userdata', $userdata);
		return redirect('animal');
	}
}