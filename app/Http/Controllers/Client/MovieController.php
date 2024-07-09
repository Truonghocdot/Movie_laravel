<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;
class MovieController extends Controller
{
    public function watching($slug, Request $req ){
        $film = Movies::where('slug', $slug)->first();
        if (!$film) {
            return redirect()->back()->with('error', 'Movie not found');
        }
        $movie = new Movies();
        $relation = Movies::where('vietsub', $film->vietsub)->where('slug', '!=', $slug)->get();
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        if ($film->type_release == 'single') {
            return view('client.watching', compact('film', 'relation', 'top'));
        } else {
            $page = $req->input('tap') - 1;
            return view('client.watching', compact('film', 'relation', 'top', 'page'));
        }
    }
    
    public function detail($slug){
        $movie = new Movies();
        $film = $movie::where('slug',$slug)->first();
        $relation = $movie::where('vietsub',$film['vietsub'])->where('slug', '!=', $slug)->limit('12')->get() ;
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        return view('client.detail',compact('film','top','relation'));
    }
}
