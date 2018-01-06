<?php

namespace App\Http\Controllers;

class ClassimaxController extends Controller
{
    public function index(){
        return view('classimax.welcome');
    }

    public function indexBlog(){
        return view('classimax.blog');
    }

    public function indexCategory(){
        return view('classimax.category');
    }

    public function indexDashboard(){
        return view('classimax.dashboard');
    }

    public function indexSingleBlog(){
        return view('classimax.single-blog');
    }

    public function indexSingleItem(){
        return view('classimax.single-item');
    }

    public function indexUserProfile(){
        return view('classimax.user-profile');
    }
}
