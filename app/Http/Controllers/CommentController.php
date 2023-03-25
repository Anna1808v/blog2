<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() 
    {
        $comment = Comment::where('is_published', 1)->first();
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
            dd($item);
            Comment::create($item);
        }
        dd('created');
    }
}
