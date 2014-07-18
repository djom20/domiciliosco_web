<?php

class MenusCategoryController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (!Auth::check()) return Redirect::to('/');
		else{
			$menu_category = MenuCategory::all();
			if(Request::ajax())
				return View::make('dashboard.menus_category.list')->with('menu_category', $menu_category);
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
				$menu_category = new MenuCategory();
				$menu_category->setName(Input::get('name'));
				$menu_category->save();
				return 1;
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
	public function show()
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
			$menu_category = MenuCategory::find(Input::get('id'));
			return View::make('dashboard.menus_category.edit')->with('menu_category', $menu_category);
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
			$menu_category = MenuCategory::find(Input::get('id'));
			if($menu_category){
				if(Input::get('action') != 'state'){
					$menu_category->setName(Input::get('name'));
					$menu_category->save();
					return View::make('dashboard.menus_category.create');					
				}else{
					$menu_category->setState(Input::get('state'));
					$menu_category->save();
					return 1;
				}
			}
		}
		return 0;
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
			MenuCategory::destroy(Input::get('id'));
			return 1;
		}
		return 0;
	}

}