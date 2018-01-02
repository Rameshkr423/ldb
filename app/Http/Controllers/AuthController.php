<?php

namespace App\Http\Controllers;

use Session;
use App\Utils\CommonTrait;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
	use CommonTrait;

    public function getLogin()
    {   
    	return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $endpoint = config('lenderdashboard.login.url');
        $input['email_id'] = $request->email_id;
        $input['password'] = $request->password;

        $result = $this->callDataLayerApi($endpoint, $type='api', $input);
        
        if($result['status'] == 200) {
            if(empty($result['bodyContent']['data']['executive_details']) === false) {
            	Session::put('data', $result['bodyContent']['data']);
            } else {
        		return redirect()->back()->with('error', 'Login failed please check your input');
        	}

            return redirect()->route('dashboard');  
        }
      
        return redirect()->back()->with('error', 'Internal server error');
    }

    public function logout()
    {
    	Session::flush();

    	return redirect()->route('getLogin')->with('success', 'Successfully logged out');
    }
}
