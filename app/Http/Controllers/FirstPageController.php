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

    public function search(Request $request)
    {
        if(request('category')=='articles'){
            $articles = Article::with('articleCategory')->with('articleStatus')->where('title','like','%'.$request['search'].'%')->latest()->paginate(10);
            return view('article.index' , compact('articles'));
        }
        if(request('category')=='books'){
            $books = Book::with('bookCategory')->with('bookStatus')->where('name','like','%'.$request['search'].'%')->latest()->paginate(10);
            return view('book.index' , compact('books'));
        }
        if(request('category')=='posts'){
            $posts = Post::with('postCategory')->with('postStatus')->where('title','like','%'.$request['search'].'%')->latest()->paginate(10);
            return view('post.index' , compact('posts'));
        }
    }

}
