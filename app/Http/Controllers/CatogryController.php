<?php

namespace App\Http\Controllers;

use App\Models\Catogry;
use Illuminate\Http\Request;

class CatogryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index()
{
    $catogries = Catogry::all();
    return view('admin.catogries.index', compact('catogries'));
}

/**
 * Show the form for creating a new Catogry.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('admin.catogries.create');
}

/**
 * Store a newly created Catogry in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:catogries',
    ]);

    $Catogry = new Catogry;
    $Catogry->name = $request->name;
    $Catogry->save();

    return redirect()->route('catogries.index')->with('success', 'تم الحفظ بنجاح .');
}

/**
 * Show the form for editing the specified Catogry.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $Catogry = Catogry::findOrFail($id);

    return view('admin.catogries.edit', compact('Catogry'));
}

/**
 * Update the specified Catogry in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|unique:catogries,name,' . $id,
    ]);

    $Catogry = Catogry::findOrFail($id);
    $Catogry->name = $request->name;
    $Catogry->save();

    return redirect()->route('catogries.index')->with('success', 'تم التعديل بنجاح.');
}

/**
 * Remove the specified Catogry from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $Catogry = Catogry::findOrFail($id);
    $Catogry->delete();

    return redirect()->route('catogries.index')->with('success', 'تم الحذف بنجاح.');
}
}
