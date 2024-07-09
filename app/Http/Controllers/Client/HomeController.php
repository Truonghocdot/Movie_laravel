<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class HomeController extends Controller
{
    public function home(){
        $theater_screen = Movies::where('theater_screen', true)->paginate(8);
        $series = Movies::where('type_release', 'series')->paginate(8);
        $single = Movies::where('type_release', 'single')->paginate(8);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        $cartoon = Movies::where('type_release','hoathinh')->limit(8)->get();
        return view('client.index', compact('theater_screen', 'series', 'single', 'top','cartoon'));
    }
    
}
