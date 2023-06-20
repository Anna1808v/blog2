<?php


namespace App\Http\Controllers\Admin\Comment;


use App\Category;
use App\Comment;
use App\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Comment $comment, Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.comment.edit', compact('comment', 'categories', 'tags'));
    }
}
