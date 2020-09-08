<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "author" => $faker->name,
        "title" => $faker->sentence,
        "content" => $faker->paragraph($nbSentences = 15),
        "image" => "images/" . $faker->image($dir = storage_path("app/public/images"), $width = 400, $height = 400, "cats", false)
    ];
});
