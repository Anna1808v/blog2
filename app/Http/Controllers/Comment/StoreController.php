<?php

namespace App\Http\Controllers\Comment;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
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
}
