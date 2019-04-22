<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsAddRequest;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$news = News::orderBy('id', 'desc')->paginate(10);
		return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.news.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsAddRequest $request)
    {
		$validator = $request->validated();

		$news = new News;
		$news->title = $request->title;
		$news->save();

		return redirect()->route('admin.news.index')->with(['message' => 'News Added Successfully']);
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
		$news = News::find($id);
		return view('admin.news.edit', compact('news'));
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
		$news = News::find($id);
		$news->title = $request->title;
		$news->save();

		return redirect()->route('admin.news.index')->with(['message' => 'News Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$news = News::find($id);
		$news->delete();
		return redirect()->route('admin.news.index')->with(['message' => 'News Deleted Successfully']);
    }
}
