<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $posts = [
            ["title" => 'Title 1', "extract" => 'Extract 1', "content" => 'Content 1',  "access"	=> 'public', "expire"	=> false, "comment"	=> true], 'user_id' => 1 ,
            ["title" => 'Title 2', "extract" => 'Extract 2', "content" => 'Content 2', "access"	=> 'private', "expire"	=> true, "comment"	=> false, 'user_id' => 2]
        ];

        DB::table('posts')->insert($posts);
    }
}
