<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Codice per ottenere il contenuto che desideri visualizzare nella route principale
        $contents = Post::all();
        $categories = Category::all();

        return view('home', compact('contents', 'categories'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
