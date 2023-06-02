<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $this->faker->name(20),
        'content' => $this->faker->text,
        'image' => $this->faker->imageUrl,
        'category_id' => Category::get()->random()->id
    ];
});
