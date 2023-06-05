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
        $allTable = compact('postCount', 'categoryCount', 'userCount');
        //dd($allTable);
        return view('admin.dashboard', compact('postCount', 'categoryCount', 'userCount', 'allTable'));
    }


    public function showAll(Request $request)
    {
        $current = $request->path();
        //dd($current);

        if ($current === 'admin/posts') {
            $postTable = Post::all();
            return view('admin.posts', compact('postTable'));

        } elseif ($current === 'admin/categories') {
            $categoryTable = Category::All();
            return view('admin.categories', compact('categoryTable'));

        } elseif ($current === 'admin/users') {
            $userTable = User::select('id', 'name', 'email', 'created_at', 'updated_at')->get();
            return view('admin.users', compact('userTable'));

        } elseif ($current === 'admin/all') {
            $postTable = Post::all();
            $categoryTable = Category::All();
            $userTable = User::select('id', 'name', 'email', 'created_at', 'updated_at')->get();
            $allTable = compact('postTable', 'categoryTable', 'userTable');
            return view('admin.all', compact('allTable'));
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
