<?php

use App\Tag;
use App\Comment;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(Category::class)->times(80)->create();
        $tags = factory(Tag::class)->times(200)->create();
        $comments = factory(Comment::class)->times(100)->create();    

        foreach($comments as $comment){
            $tagsIds = $tags->random(5)->pluck('id');
            $comment->tags()->attach($tagsIds);
        }
    }
}
