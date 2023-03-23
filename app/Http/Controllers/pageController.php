<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home() {
        return view ('home');
    }

    public function aboutus() {
        return view ('aboutus');
    }

    public function price() {
        return view ('price');
    }

    public function articles( ) {
        return view ('articles');
    }

    public function article( Post $post) {
        return view ('article', compact('post'));
    }

    public function contact() {
        return view ('contact');
    }
}
