<?php

namespace App\Http\Controllers\Comment;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Filters\CommentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\FilterRequest;

class IndexController extends Controller
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
        dd($comments);
        
        return view('comment.index', compact('comments'));
    }
}
