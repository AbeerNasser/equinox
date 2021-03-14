<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::all();
        return view('dashboard/services',compact('services'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'logo'=>'image',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data=$request->except('image');
        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sevicesimg/'.$request->image->hashName()));
            $data['logo']=$request->image->hashName();
        }
        $services = Service::create($data);
        return back()->with('status','تم اضافة خدمة جديدة بنجاح');
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
        $serviceimag= Service::find($id);
        $request->validate([
            'logo'=>'image',
            'title'=>'required',
            'description'=>'required'
        ]);
        $data=$request->except(['_token','_method','image']);
        if($request->image){
            if($serviceimag->logo != 'default.png'){
                Storage::disk('public_uploads')->delete('/sevicesimg/'.$serviceimag->logo);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/sevicesimg/'.$request->image->hashName()));
            $data['logo']=$request->image->hashName();
        }
        $services = Service::where('id', '=', $id)->update($data);

        return back()->with('status','تم تعديل الخدمة بنجاح');
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if($service->logo != 'default.png'){
            Storage::disk('public_uploads')->delete('/sevicesimg/'.$service->logo);
        }
        $service->delete();

        return back()->with('status','تم حذف هذه الخدمة بنجاح');
    }
}
