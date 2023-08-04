<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ], [
            'name.required' =>      "يرجى ادخال الاسم",
            "email.required" =>     "يرجى ادخال الايميل",
            "password.required" =>   "يجب ادخال كلمة المرور ",

        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        return redirect('/users')->with("Add", "تم اضافة المستخدم بنجاح");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $roule = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ];

        if(isset($request->password))
        $roule["password"] = ['string', 'min:8', 'confirmed'];
        $request->validate($roule, [
            'name.required' =>      "يرجى ادخال الاسم",
            "email.required" =>     "يرجى ادخال الايميل",

        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->update();
        return redirect('/users')->with('edit', "تم التعديل بنجاح");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
