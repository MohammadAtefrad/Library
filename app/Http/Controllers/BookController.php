<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BookStatus;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Post;

class BookController extends Controller
{
    public function all_books()
    {
        $books = Book::with('bookCategory')->with('bookStatus')->latest()->paginate(10);
        return view('book.index', compact('books'));
    }

    public function one_book(Book $book)
    {
        $comments = $book->bookComments()->get();
        return view('book.onebook', compact('book' , 'comments'));
    }

    public function books_by_category(Request $request)
    {
        $books = book::with('bookCategory')->with('bookStatus')->where('book_category_id',$request['category'])->latest()->paginate(10);
        return view('book.index' , compact('books'));
    }

    public function books_by_alfabet(Request $request)
    {
        $books = book::with('bookCategory')->with('bookStatus')->where('name','like','%'.$request['letter'].'%')->latest()->paginate(10);
        return view('book.index' , compact('books'));
    }

    public function add_comment(book $book)
    {
        $this->validate(request(), [
            'body' => 'required|min:5',
        ]);
        $book->bookComments()->create([
            'user_id' => Auth()->user()->id,
            'body' => request('body'),
            'comment_status_id' => '2',
        ]);
        session()->flash('commentmessage' , 'نظر شما با موفقیت دریافت شد');
        return back();
    }

    public function search_book(Request $request)
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

    public function reserve_book(Request $request, book $book)
    {
        //
        if(auth()->check()){
            if(! $request->session()->has('userId')){
                $userId = Auth::user()->id;
                session(['userId' => $userId]);
            }

            if(! $request->session()->has('bookId')){
                $request->session()->put('bookId', []);
            }

            if(! in_array($book->id, session('bookId'))){
                $request->session()->push('bookId', $book->id);

                // $bookStatus = BookStatus::where('book_status', "در حال امانت گرفته شدن")->get();
                // $updateInstance = Book::where('id', $book->id)->update(['book_status_id' => $bookStatus[0]->id]);
            }

            // return(session('bookId'));
            return back();
        }else{
            // return "برای رزرو کتاب باید عضو سایت باشید.";
            // session()->flash('commentmessage' , 'برای رزو کتاب ابتدا باید وارد حساب کاربری خود شوید');
            return back();
        }
    }

    public function borrow_book(book $selectedBooks)
    {
        //
        $selectedBooks = book::whereIn('id', session('bookId'))->get();
        // dd($selectedBooks);

        return view('book.reserve' , compact('selectedBooks'));
    }
}
