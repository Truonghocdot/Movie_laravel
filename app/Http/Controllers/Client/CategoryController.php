<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Category;
class CategoryController extends Controller
{
    public function film_new(){
        $movie = Movies::latest()->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        $title = "phim mới";
        return view('client.categories',compact('movie','top','title'));
    }

    public function film_theater(){
        $movie = Movies::where('theater_screen',true)->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        $title = "phim chiếu rạp";

        return view('client.categories',compact('movie','top','title'));
    }

    public function film_series(){
        $movie = Movies::where('type_release','series')->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        $title = "phim bộ";

        return view('client.categories',compact('movie','top','title'));
    }

    public function film_single(){
        $movie = Movies::where('type_release','single')->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
        $title = "phim lẻ";

        return view('client.categories',compact('movie','top','title'));
    }

    public function  year_release($year){
        $movie = Movies::where('year',(int)$year)->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();

        $title = "Năm phát hành " . $year;


        return view('client.categories',compact('movie','top','title'));
    }

    public function country($country){
        $movie = Movies::where('country.slug',$country)->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();

        $c = Country::where('slug',$country)->first();

        $title = "Quốc gia " . $c->name;

        return view('client.categories',compact('movie','top','title'));
    }

    public function category($category){
        $movie = Movies::where('category.slug',$category)->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();
    
        $c = Category::where('slug',$category)->first();

        $title = 'Thể loại ' . $c->name;

        return view('client.categories',compact('movie','top','title'));
    }

    public function film_cartoon(){
        $movie = Movies::where('type_release','hoathinh')->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();

        $title = 'Phim hoạt hình';

        return view('client.categories',compact('movie','top','title'));
    }

    public function film_search(Request $req){
        $movie = Movies::where('name','like','%' . $req['s'] . '%')->orderBy('created_at', 'desc')->paginate(16);
        $top = Movies::orderBy('view', 'desc')->limit(10)->get();

        $title = 'Kết quả tìm kiếm cho "'.$req['s'].'"';

        return view('client.categories',compact('movie','top','title'));
    }
}
