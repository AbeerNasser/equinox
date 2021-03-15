<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
class SubjectController extends Controller
{
    public function index()
    {
        $subjects=Subject::all();
        return view('dashboard/subjects',compact('subjects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $request->validate([
            'name'=>'required|unique:subjects',
        ]);

        $subject = Subject::create($data);

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
        ]);
        $data=$request->except(['_token','_method']);

        $subject = Subject::where('id', '=', $id)->update($data);
        return back()->with('status','تم تعديل البيانات بنجاح');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return back()->with('status','تم الحذف بنجاح');
    }
}
