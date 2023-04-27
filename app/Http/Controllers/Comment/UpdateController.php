<?php

namespace App\Http\Controllers\Comment;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\UpdateRequest;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
       
        $this->service->update($comment, $data);
       
        return redirect()->route('comment.show', $comment->id);
    }
}
