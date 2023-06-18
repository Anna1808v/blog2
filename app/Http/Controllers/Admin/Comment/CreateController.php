<?php


namespace App\Http\Controllers\Admin\Comment;


use App\Category;
use App\Http\Controllers\Admin\Comment\BaseController;
use App\Http\Controllers\Controller;
use App\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.comment.create', compact('categories', 'tags'));
    }
}
