<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
use App\Models\Newe;

class NeweController extends Controller
{
    public function index()
    {
        $newes=Newe::with('user')->get();
        return view('dashboard/newes',compact('newes'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'=>'image',
            'title'=>'required'
        ]);
        $data=$request->except('image');
        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/newes/'.$request->image->hashName()));
            $data['image']=$request->image->hashName();
        }
        Newe::create($data);
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
        $neweimag= Newe::find($id);
        $request->validate([
            'image'=>'image',
            'title'=>'required'
        ]);
        $data=$request->except(['_token','_method','image']);
        if($request->image){
            if($neweimag->image != 'default.png'){
                Storage::disk('public_uploads')->delete('/newes/'.$neweimag->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/newes/'.$request->image->hashName()));
            $data['image']=$request->image->hashName();
        }
        $services = Newe::where('id', '=', $id)->update($data);

        return back()->with('status','تم التعديل بنجاح');
    }

    public function destroy($id)
    {
        $neweimag = Newe::find($id);
        if($neweimag->image != 'default.png'){
            Storage::disk('public_uploads')->delete('/newes/'.$neweimag->image);
        }
        $neweimag->delete();

        return back()->with('status','تم الحذف بنجاح');
    }
}
