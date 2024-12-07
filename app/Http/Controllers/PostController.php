<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        $fields['title'] = strip_tags($fields['title']);
        $fields['body'] = strip_tags($fields['body']);
        $fields['user_id'] = auth()->id();
        Post::create($fields);
        return redirect('/dashboard');
    }
}
