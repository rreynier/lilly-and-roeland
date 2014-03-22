<?php

class PhotosController extends BaseController {

	public function index()
	{
    return View::make('photos.index', array('photos' => Photo::all()));
	}

	public function create()
	{
    return View::make('photos.create');
	}

	public function store()
	{
		if (Input::hasFile('file')) {
			$file = Input::file('file');
			$destination = public_path() . '/uploads/';
			$filename = str_random(12) . '.' . $file->getClientOriginalExtension();
			$file->move($destination, $filename);

			$photo = Photo::create(array(
				'title' => Input::get('title'),
				'file_name' => '/uploads/' . $filename
			));
		}

		return Redirect::route('photos.index');
	}

	public function show($id)
	{
    return View::make('photos.show');
	}

	public function edit($id)
	{
    return View::make('photos.edit');
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
