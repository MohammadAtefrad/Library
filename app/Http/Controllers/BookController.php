<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function all_books()
    {
        //
    }

    public function one_book(Book $book)
    {
        $comments = $book->bookComments()->get();
        $book=$comments=[];
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

    public function add_book()
    {
        //
    }

    public function edit_book()
    {
        //
    }

    public function delete_book()
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
