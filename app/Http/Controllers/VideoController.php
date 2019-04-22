<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoAddRequest;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$videos = Video::orderBy('id', 'desc')->paginate(10);
		return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoAddRequest $request)
    {
		$validator = $request->validated();
		$video = new Video;
		$video->title = $request->title;
		$video->link = $request->link;
		$video->video_id = $this->getVideoId($request->link);
		$video->save();

		return redirect()->route('admin.video.index')->with(['message' => 'Notice Added Successfully']);
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
		$video = Video::find($id);
		return view('admin.video.edit', compact('video'));
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
		$video = Video::find($id);
		$video->title = $request->title;
		$video->link = $request->link;
		$video->video_id = $this->getVideoId($request->link);
		$video->save();

		return redirect()->route('admin.video.index')->with(['message' => 'Video Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$video = Video::find($id);
		$video->delete();
		return redirect()->route('admin.video.index')->with(['message' => 'Video Deleted Successfully']);
    }

    protected function getVideoId($videoUrl)
	{
		// match the regular expression for youtube link
		$path = preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videoUrl, $match);
		$youtube_id = $match[1];

		return $youtube_id;
	}
}
