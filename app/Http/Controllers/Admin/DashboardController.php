<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contents = Post::all();
        return view('admin.dashboard', compact('contents'));
    }

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $post->update($data);
        //dd($data);
       
        return redirect()->route('admin.dashboard', $post->id);
    }

    
}
