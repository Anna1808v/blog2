<?php


namespace App\Http\Controllers\Admin\Comment;

class StoreController extends BaseController
{
    public function __invoke()
    {
        return redirect()->route('admin.comment.index');
    }
}
