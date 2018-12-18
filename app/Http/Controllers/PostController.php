<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
