<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PostController extends Controller
{
    public function create()
    {
        $cats = Category::all();
        return view('admin.create_post', compact('cats'));
    }

    public function store(Request $request)
    {
            $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'file_path' => ['required', 'image', 'mimes:jpeg,png,jpeg,gif,svg', 'max:2550'],
            'description' => ['required', 'string'],
        ]);

        //file_path is the form input name, images is the folder you want it to enter and thumbnails is the name of the disk
        $file = $request->file('file_path')->store('images', 'thumbnails');

        $post = Post::create([
            'title' => $request->title,
            'category' => $request->category,
            'file_path' => $file,
            'description' => $request->description,
        ]);


        return redirect()->back()->with('message', 'Your Post has been created successfully');
    }

    public function showPost()
    {
        $post = Post::all();
        return view('admin.all_post', compact('post'));
    }

    public function destroyPost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
