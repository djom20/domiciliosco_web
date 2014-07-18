<?php

class BannersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (!Auth::check()) return Redirect::to('/');
		else{
			$banners = Banner::all();
			
			if(!Request::ajax()) return View::make('dashboard.banners.index')->with('banners', $banners);
			else return View::make('dashboard.banners.list')->with('banners', $banners);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Request::ajax()) return View::make('dashboard.banners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
			$banner = Banner::find(Input::get('id'));
			return View::make('dashboard.banners.edit')->with('banner', $banner);
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
			$banner = Banner::find(Input::get('id'));
			if($banner){
				if(Input::get('action') != 'state'){
					$banner->setLink(Input::get('link'));
					$banner->setDescription(Input::get('description'));
					// if(Input::hasFile('image')){
						if (Input::file('image')->isValid()){
							$ext = Input::file('image')->getClientOriginalExtension();
						    Input::file('image')->move('/public_html/admin/public/uploads/banners/', Input::get('id').'.'.$ext);
						    $banner->setImage(Input::get('id').'.'.$ext);
						}else{
							return 'no valid';
						}
					// }else{
					// 	return 'no uploads';
					// }
					$banner->save();
					
					return View::make('dashboard.banners.create')->with('banner', $banner);					
				}else{
					$banner->setState(Input::get('state'));
					$banner->save();
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
			Banner::destroy(Input::get('id'));
			return 1;
		}
		return 0;
	}

}