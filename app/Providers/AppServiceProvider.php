<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//important for database:
use Illuminate\Support\Facades\Schema;
use App\BookCategory;
use App\ArticleCategory;
use App\Article;
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
        view()->composer('book.sidebar' , function($view){
            $categories = BookCategory::all();
            $view->with(compact('categories'));            
        });
        // article sidebar
        view()->composer('article.sidebar' , function($view){
            $categories = ArticleCategory::all();
            $view->with(compact('categories'));
        });
        // user sidebar
        view()->composer('user.sidebar' , function($view){
            
            $view->with(compact('books' , 'articles' , 'factors' , 'comments' , 'massages'));
        });
        // post left sidebar
        view()->composer('post.leftsidebar' , function($view){
            $articles = Article::latest()->take(5)->get();
            $view->with(compact('articles'));
        });
        // post right sidebar
        view()->composer('post.rightsidebar' , function($view){
            $books = Book::latest()->take(5)->get();
            $view->with(compact('books'));
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
