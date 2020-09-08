<?php

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
        // php artisan db:seed
        $this->call(ArticleSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
