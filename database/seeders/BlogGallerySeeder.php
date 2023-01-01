<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_image')->insert([
            'image'      => 'demo/img/blog/gallery_image_9329.jpg',
            'blog_id'    => 3,
        ]);
        DB::table('blog_image')->insert([
            'image'      => 'demo/img/blog/gallery_image_7303.jpg',
            'blog_id'    => 3,
        ]);
        DB::table('blog_image')->insert([
            'image'      => 'demo/img/blog/gallery_image_4276.jpg',
            'blog_id'    => 3,
        ]);
    }
}
