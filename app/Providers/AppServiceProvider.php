<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Country;
class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        View::composer(['client.categories','client.detail','client.index','client.watching'], function ($view) {
            $categories = Category::all();
            $countries =Country::all() ;
            $view->with(compact('categories','countries'));
        });
    }
}
