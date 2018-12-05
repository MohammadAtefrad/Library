<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add_comment(Article $article){
        $this->validate(request(), [
            'body' => 'required|min:5',
        ]);
        $article->comments()->create([
            'user_id' => Auth()->user()->id,
            'body' => request('body'),
        ]);
        return back();
    }
}
