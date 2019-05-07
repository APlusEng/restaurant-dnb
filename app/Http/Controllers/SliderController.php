<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderAddRequest;
use App\Slider;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
	use UploadTrait;
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$sliders = Slider::orderBy('id', 'desc')->paginate(10);
		return view('admin.slider.index', compact('sliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.slider.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(SliderAddRequest $request)
	{
		$validator = $request->validated();
		$slider = new Slider;
		$slider->title = $request->title;
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/sliders/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$slider->image = $filePath;
		}
		$slider->save();

		return redirect()->route('admin.slider.index')->with(['message' => 'Slider Added Successfully']);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$slider = Slider::find($id);
		return view('admin.slider.edit', compact('slider'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$slider = Slider::find($id);
		$slider->title = $request->title;
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/sliders/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$slider->image = $filePath;
		}
		$slider->save();

		return redirect()->route('admin.slider.index')->with(['message' => 'Slider Updated Successfully']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$slider = Slider::find($id);
		$slider->delete();
		return redirect()->route('admin.slider.index')->with(['message' => 'Slider Deleted Successfully']);
	}
}
