<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() 
    {
        $comments = Comment::all();
        return view('comments', compact('comments'));
    }

    public function create()
    {
        $commentsArr = [
            [
                'title' => 'title from IDE',
                'content' => 'content from IDE',
                'image' => 'imageFromIDE.jpg',
                'likes' => 10000,
                'is_published' => '1'
            ],

            [
                'title' => 'another title from IDE',
                'content' => 'another content from IDE',
                'image' => 'anotherImageFromIDE.jpg',
                'likes' => 80000,
                'is_published' => '1'
            ]
        ];

        foreach($commentsArr as $item){
            Comment::create($item);
        }
        dd('created');
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
