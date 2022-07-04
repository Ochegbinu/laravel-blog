<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;


class CommentController extends Controller
{
    public function shearComment(Request $request)
    {
        $comment =  Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'post_id' => $request->input('post_id'),
        ]);
        return redirect()->back()->with('message', 'comment sent successfully');
    }
    
}
