<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Comment;
use App\Category;
use App\CommentTag;
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('comment.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        
        $tags = $data['tags'];
        unset($data['tags']);
        
        $comment = Comment::create($data);
        $comment->tags()->attach($tags);

        return redirect()->route('comment.index');
    }

    public function show(Comment $comment)
    {      
        $tags = $comment->tags;
        return view('comment.show', compact('comment', 'tags'));
    }

    public function edit(Comment $comment)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('comment.edit', compact('comment', 'categories', 'tags'));
    }

    public function update(Comment $comment)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        dd($data['category_id']);

        $tags = $data['tags'];
        unset($data['tags']);

        $comment->update($data);
        $comment->tags()->sync($tags);

        return redirect()->route('comment.show', $comment->id);
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
