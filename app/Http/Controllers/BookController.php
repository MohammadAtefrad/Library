<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\BookStatus;
use App\Article;
use App\Post;
use App\Factor;
use App\FactorStatus;

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

    public function cancel_reserve_book(Request $request, $event, book $book)
    {
        if($event == 'all'){
            $request->session()->forget('bookId');
            return redirect('/');
        }else{
            $selectedBooks = session()->pull('bookId', []); // Second argument is a default value
            if(($key = array_search($book->id, $selectedBooks)) !== false) {
                unset($selectedBooks[$key]);
            }
            session()->put('bookId', $selectedBooks);
            return back();
        }
    }

    public function borrow_book(Request $request, book $selectedBooks)
    {
        if($request->session()->has('bookId')){
            $selectedBooks = book::whereIn('id', session('bookId'))->get();
            return view('book.reserve' , compact('selectedBooks'));
        }else{
            return back();
        }
    }

    public function make_factor(Request $request)
    {
        //
        $factorStatus = FactorStatus::where('factor_status', 'جدید')->get();

        $newFactor = new Factor;
        $newFactor->user_id = session('userId');
        $newFactor->books_number = count(session('bookId'));
        $newFactor->factor_status_id = $factorStatus[0]->id;
        $newFactor->save();
        $newFactor->books()->attach(session('bookId'));

        $request->session()->forget('bookId');
        session()->flash('message' , '.فاکتور با موفقیت صادر شد');
        return redirect('/');
    }
}
