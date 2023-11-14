<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = collect([
            [
                'title' => 'Post one',
                'slug' =>'post-one',
                'excerpt' => 'Excertp of post one',
                'description' => 'Descriptoin of pst one',
                'is_published' => true,
                'min_to_read' => 2
            ],
            [
                'title' => 'Post two',
                'slug' =>'post-two',
                'excerpt' => 'Excertp of post two',
                'description' => 'Descriptoin of pst two',
                'is_published' => true,
                'min_to_read' => 34
               ]
        ]);

        $posts->each(function ($post) {
            Post::create($post);
        });
       
    }
}
