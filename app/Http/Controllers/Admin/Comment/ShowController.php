<?php


namespace App\Http\Controllers\Admin\Comment;

use App\Comment;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Request $request, Comment $comment)
    {
        $tags = $comment->tags;

        return view('admin.comment.show', compact('comment',  'tags'));
    }
}
