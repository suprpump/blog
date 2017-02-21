<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // add validation
        $this->validate(request(), ['body' => 'required|min:2']);

        // add a comment to a post
        $post->addComment(request('body'));

        return back();
    }
}
