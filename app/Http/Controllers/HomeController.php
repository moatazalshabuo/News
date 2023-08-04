<?php

namespace App\Http\Controllers;

use App\Models\Catogry;
use App\Models\News;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::with('catogry')->orderBy('id','desc')->paginate(11);
        $catogries = Catogry::all();
        return view('home',compact('news',"catogries"));
    }

    public function catogry($id)
    {
        $news = News::with('catogry')->where('catogry_id',$id)->orderBy('id','desc')->paginate(11);
        $catogries = Catogry::all();
        return view('catogry',compact('news',"catogries"));
    }

    public function news($id){
        $news = News::with("catogry")->where('id',$id)->first();
        $catogries = Catogry::all();
        return view('news',compact("news","catogries"));
    }
}
