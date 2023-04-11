<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Category;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() 
    {
        $category = Category::find(1);
        $comment = Comment::find(1);
        dd($comment->category);
    }

    public function create()
    {
        return view('comment.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Comment::create($data);
        return redirect()->route('comment.index');
    }

    public function show(Comment $comment)
    {
        return view('comment.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comment.edit', compact('comment'));
    }

    public function update(Comment $comment)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        $comment->update($data);
        return redirect()->route('comment.index', $comment->id);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comment.index');
    }

    public function firstOrCreate()
    {
        $anotherComment = [
            'title' => '1231231231',
            'content' => 'update',
            'image' => 'update',
            'likes' => 2,
            'is_published' => '1'
        ];

        $pattern = [
            'title' => 'pattern',
        ];

        $myComment = Comment::firstOrCreate($pattern, $anotherComment);

        dd($myComment);
    }

    public function updateOrCreate()
    {
        $updateComment = 
        [
            'title' => 'QWQWQupdateOrCreate',
            'content' => 'qazqaz',
            'image' => 'updateOrCreate update',
            'likes' => 2233,
            'is_published' => '1'
        ];

        $pattern = [
            'content' => 'qazqaz',
        ];

        $comment = Comment::updateOrCreate($pattern, $updateComment);

        dd('hi');
    }
}
