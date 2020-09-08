<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        "article_id" => rand(1, 10),
        "name" => $faker->name,
        "comment" => $faker->sentence,
    ];
});
