<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() 
    {
        $comments = Comment::all();
        return view('comment.index', compact('comments'));
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

    public function update()
    {
        $comment = Comment::find(2);

        $comment->update([
            'title' => 'update',
            'content' => 'update',
            'image' => 'update',
            'likes' => 2,
            'is_published' => '1'
        ]);

        dd('updated');
    }

    public function delete()
    {
        $comment = Comment::withTrashed()->find(22);
        $comment->restore();
        dd('restored');
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
