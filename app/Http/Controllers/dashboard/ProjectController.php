<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Storage;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('dashboard/projects',compact('projects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'=>'image',
            'name'=>'required',
            'type'=>'required'
        ]);
        $data=$request->except('image');
        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/projects/'.$request->image->hashName()));
            $data['image']=$request->image->hashName();
        }
        Project::create($data);
        return back()->with('status','تم اضافة مشروع جديد بنجاح');
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
        $projectimag= Project::find($id);
        $request->validate([
            'image'=>'image',
            'name'=>'required',
            'type'=>'required'
        ]);
        $data=$request->except(['_token','_method','image']);
        if($request->image){
            if($projectimag->image != 'default.png'){
                Storage::disk('public_uploads')->delete('/projects/'.$projectimag->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/projects/'.$request->image->hashName()));
            $data['image']=$request->image->hashName();
        }
        Project::where('id', '=', $id)->update($data);

        return back()->with('status','تم تعديل بيانات المشروع بنجاح');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if($project->image != 'default.png'){
            Storage::disk('public_uploads')->delete('/projects/'.$project->image);
        }
        $project->delete();

        return back()->with('status','تم حذف هذا المشروع بنجاح');
    }
}
