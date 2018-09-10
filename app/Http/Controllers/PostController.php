<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function like(Post $post)
    {
        $post->likeBy();

        return back();
    }

    public function unlike(Post $post)
    {
        $post->unlikeBy();

        return back();
    }

    public function dislike(Post $post)
    {
        $post->dislikeBy();

        return back();
    }

    public function undislike(Post $post)
    {
        $post->undislikeBy();

        return back();
    }
}
