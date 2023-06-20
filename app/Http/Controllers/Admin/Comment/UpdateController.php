<?php
namespace App\Http\Controllers\Admin\Comment;

use App\Http\Requests\Comment\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Comment $comment): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        $this->service->update($comment, $data);

        return redirect()->route('admin.comment.show', $comment->id);
    }
}
