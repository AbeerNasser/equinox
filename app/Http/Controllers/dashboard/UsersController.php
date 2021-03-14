<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users=User::where('role','=','admin')->get();
        return view('dashboard/users',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed',
        ]);
        $data['password']= bcrypt($request->password);
        $user = User::create($data);

        return back()->with('status','تم الاضافة بنجاح');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);
        $data=$request->except(['password_confirmation','_token','_method']);
        $data['password']= bcrypt($request->password);

        $user = User::where('id', '=', $id)->update($data);
        return back()->with('status','تم تعديل البيانات بنجاح');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('status','تم الحذف بنجاح');
    }
}
