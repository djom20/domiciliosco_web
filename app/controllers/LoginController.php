<?php

class LoginController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check()) return Redirect::to('dashboard');
		else return View::make('login/signin');
		// return View::make('login/signin');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Request::ajax()){
			$email = mb_strtolower(trim(Input::get('username')));
        	$password = Input::get('password');

			if(Auth::attempt(array('email' => $email, 'password' => $password), true)){
				if(Auth::check()) return 1; else return 0;
			}else return 0;
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Auth::logout();
		return Redirect::to('/');
	}
}