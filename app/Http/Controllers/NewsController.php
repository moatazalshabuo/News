<?php

namespace App\Http\Controllers;

use App\Models\Catogry;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('catogry')->orderBy('id','desc')->paginate(15);


        return view("admin.news.index", compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catogries = Catogry::all();
        return view('admin.news.create', compact('catogries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ["required"],
            "description" => ["required"],
            'image_1' => ['required'],
            "catogry_id" => ["required"]
        ]);
        $news = new News();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->create_by = 1;
        $news->catogry_id = $request->catogry_id;
        $news->image_1 = $news->saveImage($request->image_1);
        if ($request->hasFile('image_2')) {
            $news->image_2 = $news->saveImage($request->image_2);
        }
        if ($request->hasFile('image_3')) {
            $news->image_3 = $news->saveImage($request->image_3);
        }
        if ($request->hasFile('image_4')) {
            $news->image_4 = $news->saveImage($request->image_4);
        }

        $news->save();

        return redirect()->route('news.index')->with("add","تم الحفظ بنجاح");;
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $catogries = Catogry::all();
        return view('admin.news.edit', compact('news', 'catogries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $news)
    {
        $news = News::findOrFail($news);
        $request->validate([
            'title' => ["required"],
            "description" => ["required"],
            "catogry_id" => ["required"]
        ]);
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->create_by = 1;
        $news->catogry_id = $request->catogry_id;
        if ($request->hasFile('image_1')) {
            $file = 'images/' . $news->image_1;
            $news->image_1 = $news->saveImage($request->image_1);
            File::delete($file);
        }
        if ($request->hasFile('image_2')) {
            $file = 'images/' . $news->image_2;
            $news->image_2 = $news->saveImage($request->image_2);
            File::delete($file);
        }
        if ($request->hasFile('image_3')) {
            $file = 'images/' . $news->image_3;
            $news->image_3 = $news->saveImage($request->image_3);
            File::delete($file);
        }
        if ($request->hasFile('image_4')) {
            $file = 'images/' . $news->image_4;
            $news->image_4 = $news->saveImage($request->image_4);
            File::delete($file);
        }

        $news->save();

        return redirect()->route('news.index')->with("edit","تم التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->image_1) {
            File::delete('images/'.$news->image_1);
        }
        if ($news->image_2) {
            File::delete('images/'.$news->image_2);
        }
        if ($news->image_3) {
            File::delete('images/'.$news->image_3);
        }
        if ($news->image_4) {
            File::delete('images/'.$news->image_4);
        }
        $news->delete();
        return redirect()->back()->with("delete","تم الحذف بنجاح");
    }
}
