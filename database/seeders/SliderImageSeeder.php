<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_image')->insert([
            'image'                 => 'demo/img/sliders/slider_image_1.jpg',
            'slider_id'             => '1',
        ]);
        DB::table('slider_image')->insert([
            'image'                 => 'demo/img/sliders/slider_image_2.jpg',
            'slider_id'             => '1',
        ]);
        DB::table('slider_image')->insert([
            'image'                 => 'demo/img/sliders/slider_image_3.jpg',
            'slider_id'             => '1',
        ]);
    }
}
