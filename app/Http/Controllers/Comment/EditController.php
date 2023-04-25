<?php

namespace App\Http\Controllers\Comment;

use App\Tag;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Comment $comment)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('comment.edit', compact('comment', 'categories', 'tags'));
    }
}
