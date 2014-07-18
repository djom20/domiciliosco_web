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
			$additional = Additional::all();
			
			if(!Request::ajax()){
				$menus = Menu::all();
				$restaurants = Restaurant::where('state', '=', '1')->orderBy('name')->get();
				return View::make('dashboard.additional.index')
					->with('additional', $additional)
					->with('menus', $menus)
					->with('restaurants', $restaurants);
			}else return View::make('dashboard.additional.list')->with('additional', $additional);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// if(Request::ajax()) return View::make('dashboard.additional.create');
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
				
				$menus = Menu::all();
				$restaurants = Restaurant::where('state', '=', '1')->orderBy('name')->get();
				return View::make('dashboard.additional.create')
						->with('menus', $menus)
						->with('restaurants', $restaurants);
			}
		}
		return null;
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
	public function edit()
	{
		if(Request::ajax()){
			$additional = Additional::find(Input::get('id'));
			$restaurants = Restaurant::where('state', '=', '1')->orderBy('name')->get();
			$menus = Menu::where('state', '=', '1')->orderBy('name')->get();
			return View::make('dashboard.additional.edit')
				->with('additional', $additional)
				->with('menus', $menus)
				->with('restaurants', $restaurants);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		if(Request::ajax()){
			$additional = Additional::find(Input::get('id'));
			if($additional){
				if(Input::get('action') != 'state'){
					$additional->setName(Input::get('name'));
					$additional->setDescription(Input::get('description'));
					$additional->setPrice(Input::get('price'));
					$additional->setMenu(Input::get('food'));
					$additional->setRestaurant(Input::get('restaurant'));
					$additional->save();
					
					$menus = Menu::all();
					$restaurants = Restaurant::where('state', '=', '1')->orderBy('name')->get();
					return View::make('dashboard.additional.create')
						->with('menus', $menus)
						->with('restaurants', $restaurants);
				}else{
					$additional->setState(Input::get('state'));
					$additional->save();
					return 1;
				}
			}
		}
		return null;
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
			Additional::destroy(Input::get('id'));
			return 1;
		}
		return 0;
	}

}