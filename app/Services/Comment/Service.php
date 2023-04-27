<?php

namespace App\Services\Comment;

class Service
{
    public function store($data)
    {
        if(isset($data['tags'])){
            $tags = $data['tags'];
            unset($data['tags']);
        }        
        
        $comment = Comment::create($data);
        if(isset($tags)){
            $comment->tags()->attach($tags);
        }
    }

    public function update($post, $data)
    {
        if(isset($data['tags'])){
            $tags = $data['tags'];
            unset($data['tags']);
            $comment->update($data);
            $comment->tags()->sync($tags);
        } else {
            $comment->update($data);
            $comment->tags()->detach();
        }
    }
}
