<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il Model "Person"
use App\Models\Person;

// Importo il Model "Posts"
use App\Models\Post;

class MainController extends Controller
{
    // Home Route
    public function home()
    {
        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    // Posts Route
    public function posts()
    {
        $posts = Post::all();

        return view('pages.posts', compact('posts'));
    }

}