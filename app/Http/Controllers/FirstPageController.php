<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Article;
use App\Post;

class FirstPageController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(8);
        $articles = Article::latest()->paginate(6);
        $posts = Post::latest()->paginate(3);
        return view('firstpage.index', compact('books','articles','posts'));
    }

    public function contact_us()
    {
        //
    }

    public function search()
    {
        return view('firstpage.search');
    }

}
