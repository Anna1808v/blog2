<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Comment;
use App\Http\Filters\CommentFilter;
use App\Http\Requests\Comment\FilterRequest;
use Illuminate\Http\Response;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(CommentFilter::class, ['queryParams' => array_filter($data)]);
        //$comments = Comment::paginate(10);
        $comments = Comment::filter($filter)->paginate(10);

        return view('admin.comment.index', compact('comments'));
    }
}
