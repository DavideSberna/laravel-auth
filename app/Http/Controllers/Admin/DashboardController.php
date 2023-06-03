<?php

namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = Post::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('admin.dashboard', compact('postCount', 'categoryCount', 'userCount'));
    }


    public function showAll(Request $request)
    {
        $current = $request->path();
        //dd($current);

        if ($current === 'admin/posts') {
            return view('admin.posts');

        } elseif ($current === 'admin/categories') {
            return view('admin.categories');

        } elseif ($current === 'admin/users') {
            return view('admin.users');
        }
    }


    public function edit(Post $post)
    {
        return view('admin.project.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $post->update($data);
        //dd($data);
       
        return redirect()->route('admin.dashboard', $post->id);
    }

    
}
