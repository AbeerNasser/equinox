<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
use App\Models\Leader;

class LeaderController extends Controller
{
    public function index()
    {
        $leaders=Leader::all();
        return view('dashboard/leaders',compact('leaders'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'=>'image',
            'name'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data=$request->except('photo');
        if($request->photo){
            Image::make($request->photo)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/leaders/'.$request->photo->hashName()));
            $data['photo']=$request->photo->hashName();
        }
        Leader::create($data);
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
        $leadersimg= Leader::find($id);
        $request->validate([
            'photo'=>'image',
            'name'=>'required',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data=$request->except(['_token','_method','photo']);
        if($request->photo){
            if($leadersimg->photo != 'default.png'){
                Storage::disk('public_uploads')->delete('/leaders/'.$leadersimg->photo);
            }
            Image::make($request->photo)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/leaders/'.$request->photo->hashName()));
            $data['photo']=$request->photo->hashName();
        }
        Leader::where('id', '=', $id)->update($data);

        return back()->with('status','تم تعديل البيانات بنجاح');
    }

    public function destroy($id)
    {
        $leader = Leader::find($id);
        if($leader->photo != 'default.png'){
            Storage::disk('public_uploads')->delete('/leaders/'.$leader->photo);
        }
        $leader->delete();

        return back()->with('status','تم الحذف بنجاح');
    }
}
