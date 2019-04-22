<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeAddRequest;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use App\Notice;

class NoticeController extends Controller
{
	use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$notices = Notice::orderBy('id', 'desc')->paginate(10);
        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeAddRequest $request)
    {
		$validator = $request->validated();
		$notice = new Notice;
		$notice->title = $request->title;
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/notices/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$notice->image = $filePath;
		}
		$notice->save();

		return redirect()->route('admin.notice.index')->with(['message' => 'Notice Added Successfully']);
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
        $notice = Notice::find($id);
        return view('admin.notice.edit', compact('notice'));
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
		$notice = Notice::find($id);
		$notice->title = $request->title;
		if ($request->has('image')) {
			$image = $request->file('image');
			$name = time();
			$folder = '/uploads/notices/';
			$filePath = $name. '.' . $image->getClientOriginalExtension();
			$this->uploadOne($image, $folder, 'public', $name);
			$notice->image = $filePath;
		}
		$notice->save();

		return redirect()->route('admin.notice.index')->with(['message' => 'Notice Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
		return redirect()->route('admin.notice.index')->with(['message' => 'Notice Deleted Successfully']);
    }
}
