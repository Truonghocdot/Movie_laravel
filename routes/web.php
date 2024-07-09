<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogonController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MovieController as Movie;

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/chi-tiet/{slug}', [Movie::class,'detail'])->name('detail');

Route::get("/xem-phim/{slug}",[Movie::class,'watching'])->name('watching');

Route::get('/layout',function(){
    return view('layouts.client');
})->name('client.layout');

Route::get("/the-loai",[]);

Route::prefix('admin')->group(function(){
    
    Route::get("/login", [LogonController::class, 'login_show_form'])->name("admin.login");
    Route::get('/register', [LogonController::class, 'register_show_form'])->name("admin.register");
    Route::post('/register/store', [LogonController::class, 'store_new_admin_account'])->name('admin.register.store');
    Route::post('/login/logon', [LogonController::class, 'login'])->name('admin.login.logon');
    Route::get('/logout', [LogonController::class, 'logout'])->name("admin.logout");

    Route::get("", [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/movie/delete',[MovieController::class,'delete_movie'])->name('admin.movie.delete');
    Route::get("/movies", [MovieController::class, 'index'])->name('admin.movies');
    Route::get('/moives/new', [MovieController::class, 'movies_list_new'])->name('admin.movies.new');
    Route::patch('/movies/add-new/',[MovieController::class,'add_new_film'])->name('admin.movie.add');
    Route::get("/movie/{slug}", [MovieController::class, 'detail_movie'])->name("admin.movie");
});
