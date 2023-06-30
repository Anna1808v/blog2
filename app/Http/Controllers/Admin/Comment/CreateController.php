<?php
namespace App\Http\Controllers\Admin\Comment;

use App\Category;
use App\Comment;
use App\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $comments = Comment::paginate(10);
        return view('admin.comment.create', compact('categories', 'tags', 'comments'));
    }
}
