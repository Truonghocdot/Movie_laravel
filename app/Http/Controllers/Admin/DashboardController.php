<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\User;
use App\Models\Movies;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req){
        $client = User::where('role',0)->count();
        $movies = Movies::all()->count();
        $access_times = Visit::all()->count();
        return view('admin.index');
    }

    public function categories(){
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }

    public function categories_add(Request $req){
        $category = new Category();
        $category->name = $req->name ;
        $category->slug = $req->slug ;
        $category->save();

        return redirect()->back();
    }

    public function categories_delete(Request $req){
        $category = Category::where('slug',$req->slug)->delete();
        return redirect()->back();
    }

    public function countries(){
        $countries = Country::all() ;
        return view('admin.countries',compact('countries'));
    }

    public function countries_add(Request $req){
        $countries = new Country();
        $countries->name = $req->name ;
        $countries->slug = $req->slug ;
        $countries->save();

        return redirect()->back();
    }

    public function countries_delete(Request $req){
        $country = Country::where('slug',$req->slug)->delete();
        return redirect()->back();
    }
}
