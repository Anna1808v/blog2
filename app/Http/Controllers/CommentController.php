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
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => ''
        ]);
        
        $tags = $data['tags'];
        unset($data['tags']);
        
        $comment = Comment::create($data);
        foreach($tags as $tag){
            CommentTag::firstOrCreate([
                'tag_id' => $tag,
                'comment_id' => $comment->id
            ]);
        }

        return redirect()->route('comment.index');
    }

    public function show(Comment $comment)
    {
        return view('comment.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        $categories = Category::all();
        return view('comment.edit', compact('comment', 'categories'));
    }

    public function update(Comment $comment)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => ''
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
