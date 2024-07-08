<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\User;
use App\Models\Activity;
use App\Models\Movies;

class DashboardController extends Controller
{
    public function index(){
        $client = User::where('role',0)->count();
        $movies = Movies::all()->count();
        $client_active = Activity::where('status',1)->get()->count();
        $access_times = Visit::all()->count();
        return view('admin.index');
    }
}
