<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leader;
use App\Models\Service;
use App\Models\Newe;
use App\Models\Project;
use App\Models\Subject;
use App\Models\Contact;

class FrontController extends Controller
{
    public function index()
    {
        $leaders=Leader::get();
        $services=Service::get();
        $projects=Project::take(3)->get();
        $newes=Newe::with('user')->get();
        return view('front/index',compact(['leaders','services','projects','newes']));
    }

    public function about()
    {
        $leaders=Leader::get();
        return view('front/about',compact('leaders'));
    }

    public function service()
    {
        $services=Service::all();
        return view('front/services',compact('services'));
    }

    public function project()
    {
        $projects=Project::all();
        return view('front/projects',compact('projects'));
    }

    public function newe()
    {
        $newes=Newe::with('user')->get();
        return view('front/news',compact('newes'));
    }

    public function contact()
    {
        $subjects=Subject::all();
        return view('front/contact',compact('subjects'));
    }

    public function career()
    {
        $leaders=Leader::get();
        return view('front/careers',compact('leaders'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);

         Contact::create($data);

        return back()->with('status','تم الارسال بنجاح');
    }

    public function show($id)
    {
        // $service=Service::find($id);
        // return view('front/serviceDetails',compact('service'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
