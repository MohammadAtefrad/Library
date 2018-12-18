<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Article;
use App\Book;

class PostController extends Controller
{
    public function all_posts()
    {
        $posts = Post::with('postCategory')->with('postStatus')->latest()->paginate(10);
        return view('post.index', compact('posts'));
    }

    public function one_post(post $post)
    {
        $comments = $post->postComments()->get();
        return view('post.onepost', compact('post' , 'comments'));
    }

    public function search_post(Request $request)
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

    public function add_comment(post $post){
        $this->validate(request(), [
            'body' => 'required|min:5',
        ]);
        $post->postComments()->create([
            'user_id' => Auth()->user()->id,
            'body' => request('body'),
            'comment_status_id' => '2',
        ]);
        session()->flash('commentmessage' , 'نظر شما با موفقیت دریافت شد');
        return back();
    }
}
