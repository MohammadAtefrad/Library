<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Validator;
use App\ArticleCategory;
use App\User;
use App\Book;
use App\Post;

class ArticleController extends Controller
{
    public function all_articles()
    {
        $articles = article::with('articleCategory')->with('articleStatus')->latest()->paginate(10);
        return view('article.index', compact('articles'));
    }

    public function one_article(Article $article)
    {
        $comments = $article->articleComments()->get();
        return view('article.onearticle', compact('article' , 'comments'));
    }

    public function articles_by_category(Request $request)
    {
        $articles = article::with('articleCategory')->with('articleStatus')->where('article_category_id',$request['category'])->latest()->paginate(10);
        return view('article.index' , compact('articles'));
    }

    public function articles_by_alfabet(Request $request)
    {
        $articles = article::with('articleCategory')->with('articleStatus')->where('title','like','%'.$request['letter'].'%')->latest()->paginate(10);
        return view('article.index' , compact('articles'));
    }

    // public function add_article()
    // {
    //     return view('article.add');
    // }

    // public function store_article()
    // {
    //     // ------------------validation type 1--------------------------
    //     // $this->validate(request(), [
    //     //     'title' => 'required',
    //     //     'body' => 'required|min:10',

    //     // ]);
    //     // ------------------validation type 2 (better my opinion)------
    //     $validator = Validator::make(request()->all(), [
    //         'title' => 'required',
    //         'body' => 'required|min:10',
    //     ]);
    //     if ($validator->fails()) {
    //         return (redirect()->back()->withErrors($validator)->withInput());
    //     }
    //     auth()->user()->articles()->create(request(['title','body']));
    //     session()->flash('message' , 'مقاله شما با موفقیت ارسال شد');
    //     return redirect('/');
    // }

    // public function edit_article(Article $article)
    // {
    //     $categories = ArticleCategory::all()->pluck('name' , 'id');
    //     return view('article.edit' , compact('article' , 'categories'));
    // }

    // public function update_article(Article $article)
    // {
    //     $article->update(request(['title' , 'body']));

    //     $article->categories()->sync(request('category'));

    //     return redirect('/');
    // }

    // public function delete_article()
    // {
    //     //
    // }

    public function add_comment(Article $article){
        $this->validate(request(), [
            'body' => 'required|min:5',
        ]);
        $article->articleComments()->create([
            'user_id' => Auth()->user()->id,
            'body' => request('body'),
            'comment_status_id' => '2',
        ]);
        session()->flash('commentmessage' , 'نظر شما با موفقیت دریافت شد');
        return back();
    }

    public function search_article(Request $request)
    {
        if(request('category')=='articles'){
            $articles = article::with('articleCategory')->with('articleStatus')->where('title','like','%'.$request['search'].'%')->latest()->paginate(10);
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

    public function download_article(Article $article)
    {
        $name=$article->title;
        $file= public_path('/img/article/'.$article->id.'.pdf');
        $headers = array(
                  'Content-Type: application/octet-stream',
                );

        return response()->download($file, $name.'.pdf', $headers);
    }
}
