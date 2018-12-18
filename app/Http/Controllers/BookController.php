<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

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

    public function search_book()
    {
        //
    }

    public function reserve_book(Request $request)
    {
        //
        if(Auth::user() != null){
            $userId = Auth::user()->id;

            session(['userId' => $userId]);

            return session('userId');
        }else{
            return "no!";
        }
        // $id = auth()->user()->id;
        // $books = book::with('bookCategory')->with('bookStatus')->where('name','like','%'.$request['letter'].'%')->latest()->paginate(10);
        // return view('book.index' , compact('books'));

    }

    public function borrow_book()
    {
        //
    }
}
