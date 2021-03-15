<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Leader;
use App\Models\Newe;
use App\Models\Project;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services=Service::count();
        $leaders=Leader::count();
        $users=User::count();
        $newes=Newe::count();
        $projects=Project::count();

        return view('dashboard/index')->with(['services'=>$services,'users'=>$users,'leaders'=>$leaders,'newes'=>$newes,'projects'=>$projects]);
    }
}
