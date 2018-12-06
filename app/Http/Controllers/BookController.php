<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

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

    public function books_by_category()
    {
        //
    }

    public function books_by_alfabet()
    {
        //
    }

    public function search_book()
    {
        //
    }

    public function reserve_book()
    {
        //
    }

    public function borrow_book()
    {
        //
    }
}
