<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('admin/login/login');
	}

	public function doLogin()
    {
        $rules = array(
            		'email'    => 'required|email',
                    'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
            	'email'   => Input::get('email'),
                'password'          => Input::get('password')
                );
        			if (Auth::attempt($userdata)) {
                        return Redirect::to('/');
                    } else {               
                        return Redirect::to('login');
                    }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

}
