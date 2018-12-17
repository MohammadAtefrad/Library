<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.index', compact('user'));
    }
    
    public function update_profile(user $user)
    { 
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'name' => 'required',
            'phone' => 'required|min:11',
            'personal_code' => 'required|min:10|max:10',
        ]);
        $user->update(request(['firstname' , 'lastname' , 'name' , 'phone' , 'personal_code']));
        session()->flash('message' , $user->name. ' عزیز، اطلاعات شما با موفقیت ثبت شد ');
        return view('user.index', compact('user'));
    }
    public function factors()
    {

    }
    public function factor()
    {

    }
    public function users_book_article()
    {

    }
    public function comments()
    {

    }
    public function messages()
    {

    }
    public function send_message()
    {

    }

}
