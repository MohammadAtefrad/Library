<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//important for database:
use Illuminate\Support\Facades\Schema;
use App\BookCategory;
use App\ArticleCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //important for database:
        Schema::defaultStringLength(191);
        // book sidebar
        view()->composer('book.sidebar' , function($view){
            $categories = BookCategory::pluck('book_category');
            $view->with(compact('categories'));            
        });
        // article sidebar
        view()->composer('article.sidebar' , function($view){
            $categories = ArticleCategory::pluck('article_category');
            $view->with(compact('categories'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
