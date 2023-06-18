<?php


namespace App\Http\Controllers\Admin\Comment;


class DestroyController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        
        return route('admin.comment.index');
    }
}
