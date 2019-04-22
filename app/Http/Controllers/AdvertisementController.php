<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests\AdvertisementAddRequest;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
	use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::orderBy('id', 'desc')->paginate(10);
		return view('admin.advertisement.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementAddRequest $request)
    {
		$validator = $request->validated();
		$advertisement = new Advertisement;
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/advertisements/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$advertisement->image = $filePath;
		}
		$advertisement->save();

		return redirect()->route('admin.advertisement.index')->with(['message' => 'Advertisement Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$advertisement = Advertisement::find($id);
		return view('admin.advertisement.edit', compact('advertisement'));
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
		$advertisement = Advertisement::find($id);
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/notices/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$advertisement->image = $filePath;
		}
		$advertisement->save();

		return redirect()->route('admin.advertisement.index')->with(['message' => 'Advertisement Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$advertisement = Advertisement::find($id);
		$advertisement->delete();
		return redirect()->route('admin.advertisement.index')->with(['message' => 'Advertisement Deleted Successfully']);
    }
}
