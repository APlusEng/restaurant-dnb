<?php

namespace App\Http\Controllers;

use App\News;
use App\Setting;
use App\Notice;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
	{
		$setting = Setting::first();
		$notices = Notice::orderBy('id', 'desc')->paginate(3);
		$video = Video::orderBy('id', 'desc')->first();
		$news = News::orderBy('id', 'desc')->paginate(5);
		return view('welcome', compact('setting', 'notices', 'video', 'news'));
	}
}
