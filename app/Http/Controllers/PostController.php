<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $title = '';
    
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('authors')) {
            $author = User::firstWhere('username', request('authors'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title, 
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search', 'category', 'authors']))->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
