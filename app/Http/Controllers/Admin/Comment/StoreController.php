<?php


namespace App\Http\Controllers\Admin\Comment;


use App\Http\Controllers\Admin\Comment\BaseController;
use http\Env\Request;

class StoreController extends BaseController
{
    public function __invoke()
    {
        return redirect()->route('admin.comment.index');
    }
}
