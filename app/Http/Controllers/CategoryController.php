<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_book_category(){
        return view('category.addbookcategory');
    }
    public function add_post_category(){
        return view('category.addpostcategory');
    }
    public function add_article_category(){
        return view('category.addarticlecategory');
    }

    public function edit_book_category(){
        return view('category.editbookcategory');
    }
    public function edit_post_category(){
        return view('category.editpostcategory');
    }
    public function edit_article_category(){
        return view('category.editarticlecategory');
    }

    public function delete_category(){

    }
}
