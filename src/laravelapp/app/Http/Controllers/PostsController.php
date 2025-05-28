<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->get();
        $data = [
            'posts' => $posts,
        ];
        return view('posts.posts', $data);
    }

    public function store(PostRequest $request)
    {
        $user = \Auth::User();
        $post = new Post();
        $post->content = $request->content;
        $post->user_id = $user->id;
        $post->save();

        return redirect()->back();
    }
}
