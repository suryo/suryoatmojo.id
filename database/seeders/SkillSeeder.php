<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->insert([
            'type'          => 'design',
            'title'         => 'Photoshop',
            'percentage'    => '60',
            'order'         => '1',
        ]);
        DB::table('skill')->insert([
            'type'          => 'design',
            'title'         => 'Illustrator',
            'percentage'    => '80',
            'order'         => '2',
        ]);
        DB::table('skill')->insert([
            'type'          => 'design',
            'title'         => 'Indesign',
            'percentage'    => '40',
            'order'         => '3',
        ]);
        DB::table('skill')->insert([
            'type'          => 'design',
            'title'         => 'Freehand',
            'percentage'    => '75',
            'order'         => '4',
        ]);
        DB::table('skill')->insert([
            'type'          => 'development',
            'title'         => 'PHP',
            'percentage'    => '75',
            'order'         => '1',
        ]);
        DB::table('skill')->insert([
            'type'          => 'development',
            'title'         => 'HTML',
            'percentage'    => '90',
            'order'         => '4',
        ]);
        DB::table('skill')->insert([
            'type'          => 'development',
            'title'         => 'CSS',
            'percentage'    => '85',
            'order'         => '5',
        ]);
    }
}
