<?php


namespace App\Http\Controllers\Admin\Comment;

use App\Comment;

class DestroyController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('admin.comment.index');
    }
}
