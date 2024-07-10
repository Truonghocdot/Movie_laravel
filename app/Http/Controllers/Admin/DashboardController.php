<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\User;
use App\Models\Movies;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req){
        if($req->user()){
            $client = User::where('role',0)->count();
            $movies = Movies::all()->count();
            $access_times = Visit::all()->count();
            return view('admin.index');
        }else{
            return redirect()->route('admin.login')->withErrors(['wait' => 'You must login before access this page!']);
        }
    }
}
