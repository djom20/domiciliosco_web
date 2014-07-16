<?php

class AdditionalController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (!Auth::check()) return Redirect::to('/');
		else{
			if(!Request::ajax()){
				$additional = Additional::where('state', '=', '1')->orderBy('name')->get();
				$menus = Menu::all();
				$restaurants = Restaurant::all();
				return View::make('dashboard.additional.index')
					->with('additional', $additional)
					->with('menus', $menus)
					->with('restaurants', $restaurants);
			}else{
				$additional = Additional::where('state', '=', '1')->orderBy('name')->get();
				return View::make('dashboard.additional.list')->with('additional', $additional);
			}
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (!Auth::check()) return 2;
		else{
			if(Request::ajax()){
				$additional = new Additional();
				$additional->setName(Input::get('name'));
				$additional->setDescription(Input::get('description'));
				$additional->setPrice(Input::get('price'));
				$additional->setMenu(Input::get('food'));
				$additional->setRestaurant(Input::get('restaurant'));
				$additional->save();
				return 1;
			}
		}
		return 0;
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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		if(Request::ajax()){
			$additional = Additional::find(Input::get('id'));
			if($additional){
				$additional->setState(0);
				$additional->save();
				return 1;				
			}
		}
		return 0;
	}

}