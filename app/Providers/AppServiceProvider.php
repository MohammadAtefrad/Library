<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//important for database:
use Illuminate\Support\Facades\Schema;
use App\Book;

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
        // view()->composer('book.booksidebar' , function($view){
        //     $categories = Book::with('bookCategory')->get();
        //     $view->with(compact('categories'));
        // });
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
