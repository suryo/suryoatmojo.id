<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_category')->insert([
            'name'      => 'Photography',
            'slug'      => 'photography',
        ]);
        DB::table('blog_category')->insert([
            'name'      => 'Web design',
            'slug'      => 'web-design',
        ]);
    }
}
