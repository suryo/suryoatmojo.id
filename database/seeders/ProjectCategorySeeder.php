<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_category')->insert([
            'name'  => 'design',
        ]);
        DB::table('project_category')->insert([
            'name'  => 'video',
        ]);
        DB::table('project_category')->insert([
            'name'  => 'photography',
        ]);
    }
}

