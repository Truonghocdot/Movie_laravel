<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogonController;
Route::get('/', function () {
    return view('client.index');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get("/watching",function(){
    return view('client.watching');
});


Route::get("/category",function(){
    return view('categories');
});

Route::prefix('admin')->group(function(){
    
    Route::get("/login", [LogonController::class, 'login_show_form'])->name("admin.login");
    Route::get('/register', [LogonController::class, 'register_show_form'])->name("admin.register");
    Route::post('/register/store', [LogonController::class, 'store_new_admin_account'])->name('admin.register.store');
    Route::post('/login/logon', [LogonController::class, 'login'])->name('admin.login.logon');
    Route::get('/logout', [LogonController::class, 'logout'])->name("admin.logout");

    Route::get("", [DashboardController::class, 'index'])->name('dashboard');
    Route::get("/movies", [MovieController::class, 'index'])->name('admin.movies');
    Route::get("/movie/{slug}", [MovieController::class, 'detail_movie'])->name("admin.movie");
    Route::get('/moives/new', [MovieController::class, 'movies_list_new'])->name('admin.movies.new');
    Route::patch('/movies/add-new/',[MovieController::class,'add_new_film'])->name('admin.movie.add');
});