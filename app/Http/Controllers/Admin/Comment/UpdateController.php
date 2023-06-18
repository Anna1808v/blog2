<?php


namespace App\Http\Controllers\Admin\Comment;


use App\Http\Requests\Comment\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();

        $this->service->update();

        return redirect()->route('admin.comment.show', $comment->id);
    }
}
