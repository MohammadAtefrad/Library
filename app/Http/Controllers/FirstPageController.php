<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class FirstPageController extends Controller
{
    public function index()
    {
        // $user = User::where('id', 5)->with('books.bookComments')->get();
        return ($user);
    }

    public function contact_us()
    {
        //
    }

    public function search()
    {
        //
    }

}
