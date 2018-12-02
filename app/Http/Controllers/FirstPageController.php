<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class FirstPageController extends Controller
{
    public function index()
    {
        $books = Book::with('bookCategory')->get();
        // dd ($books);
        return view('firstpage.index', compact('books'));
    }

    public function contact_us()
    {
        //
    }

    public function search()
    {
        return view('firstpage.search');
    }

}
