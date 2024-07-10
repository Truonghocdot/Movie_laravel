<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogonController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MovieController as Movie;
use App\Http\Middleware\VerifyAdmin;
use App\Http\Middleware\DescView;
use App\Http\Middleware\Visitor;


Route::middleware([Visitor::class])->group(function(){
    Route::get('/', [HomeController::class,'home'])->name('home');

    Route::get('/chi-tiet/{slug}', [Movie::class,'detail'])->name('detail');

    Route::get("/xem-phim/{slug}",[Movie::class,'watching'])->middleware([DescView::class])->name('watching');

    Route::get('/phim-moi',[CategoryController::class,'film_new'])->name('film.new');
    Route::get('/phim-chieu-rap',[CategoryController::class,'film_theater'])->name('film.theater');
    Route::get('/phim-bo',[CategoryController::class,'film_series'])->name('film.series');
    Route::get('/phim-le',[CategoryController::class,'film_single'])->name('film.single');
    Route::get('/hoat-hinh',[CategoryController::class,'film_cartoon'])->name('film.cartoon');
    Route::get('/tim-kiem',[CategoryController::class,'film_search'])->name('film.search');

    Route::get('/nam-phat-hanh/{year}',[CategoryController::class,'year_release'])->name('film.year');
    Route::get('/quoc-gia/{country}',[CategoryController::class,'country'])->name('film.country');
    Route::get('/the-loai/{category}',[CategoryController::class,'category'])->name('film.category');
});

Route::prefix('admin')->group(function(){

    Route::middleware([VerifyAdmin::class])->group(function(){
        Route::get("/", [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/countries',[DashboardController::class, 'countries'])->name('admin.countries');
        Route::patch('/countries/add',[DashboardController::class, 'countries_add'])->name('admin.countries.add');
        Route::delete('/countries/delete',[DashboardController::class, 'countries_delete'])->name('admin.countries.delete');

        Route::get('/categories',[DashboardController::class, 'categories'])->name('admin.categories');
        Route::patch('/categories/add',[DashboardController::class, 'categories_add'])->name('admin.categories.add');
        Route::delete('/categories/delete',[DashboardController::class, 'categories_delete'])->name('admin.categories.delete');

        Route::delete('/movie/delete',[MovieController::class,'delete_movie'])->name('admin.movie.delete');
        Route::get("/movies", [MovieController::class, 'index'])->name('admin.movies');
        Route::get('/moives/new', [MovieController::class, 'movies_list_new'])->name('admin.movies.new');
        Route::patch('/movies/add-new/',[MovieController::class,'add_new_film'])->name('admin.movie.add');
        Route::get("/movie/{slug}", [MovieController::class, 'detail_movie'])->name("admin.movie");
    });

    Route::get("/login", [LogonController::class, 'login_show_form'])->name("admin.login");
    Route::get('/register', [LogonController::class, 'register_show_form'])->name("admin.register");
    Route::post('/register/store', [LogonController::class, 'store_new_admin_account'])->name('admin.register.store');
    Route::post('/login/logon', [LogonController::class, 'login'])->name('admin.login.logon');
    Route::get('/logout', [LogonController::class, 'logout'])->name("admin.logout");
});
