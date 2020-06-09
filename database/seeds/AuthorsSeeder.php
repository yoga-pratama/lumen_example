<?php

use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /*  factory(App\Author::class, 50)->create()->each(function ($author) {
            $author->posts()->save(factory(App\Post::class)->make());
        }); */

        $this->call([
            App\Author::class,
        ]);
    }
}
