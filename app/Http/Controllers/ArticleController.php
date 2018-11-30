<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Validator;
use App\ArticleCategory;
use App\User;

class ArticleController extends Controller
{
    public function all_articles()
    {
        $articles = User::latest()->paginate(10);
        return $articles;
        return view('article.allarticles', compact('articles'));
    }

    public function one_article(Article $article)
    {
        $comments = $article->articleComments()->get();
        return view('article.onearticle', compact('article' , 'comments'));
    }

    public function articles_by_category()
    {
        //
    }

    public function articles_by_alfabet()
    {
        //
    }

    public function add_article()
    {
        return view('article.add');
    }

    public function store_article()
    {
        // ------------------validation type 1--------------------------
        // $this->validate(request(), [
        //     'title' => 'required',
        //     'body' => 'required|min:10',

        // ]);
        // ------------------validation type 2 (better my opinion)------
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'body' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            return (redirect()->back()->withErrors($validator)->withInput());
        }
        auth()->user()->articles()->create(request(['title','body']));
        session()->flash('message' , 'مقاله شما با موفقیت ارسال شد');
        return redirect('/');
    }

    public function edit_article(Article $article)
    {
        $categories = ArticleCategory::all()->pluck('name' , 'id');
        return view('article.edit' , compact('article' , 'categories'));
    }

    public function update_article(Article $article)
    {
        $article->update(request(['title' , 'body']));

        $article->categories()->sync(request('category'));

        return redirect('/');
    }

    public function delete_article()
    {
        //
    }

    public function search_article()
    {
        //
    }

    public function download_article()
    {
        //
    }
}
