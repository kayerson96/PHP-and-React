<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function blog() {
        return view('blog');
    }
    public function poster() {
        return view('poster');
    }

};
