<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
            'type'                  => 'image',
            'video'                 => '',
            'video_type'            => '',
            'image_video'           => '',
            'color_scheme'          => 'dark-scheme',
            'text_rotator'          => '1',
            'text'                  => 'I’m your /*Creative Designer*/ located in New York
I build Top-notch Solutions for /*Brand, Web*/ and /*Mobile*/ Application
I will give you /*Best Product*/ in the shortest Time',
            'text_rotator_interval' => '5000',
            'overlay_color'         => '1',
            'overlay_type'          => 'gradient',
            'color_1'               => '#1d2671',
            'color_2'               => '#4568dc',
            'gradient_type'         => '45',
            'animation_in'          => 'animate__fadeInDown',
            'animation_out'         => 'animate__fadeOut',
        ]);
        DB::table('slider')->insert([
            'type'                  => 'video',
            'video'                 => 'http://www.youtube.com/watch?v=kn-1D5z3-Cs',
            'video_type'            => 'youtube',
            'image_video'           => 'demo/img/sliders/poster_image.jpg',
            'color_scheme'          => 'light-scheme',
            'text_rotator'          => '0',
            'text'                  => 'I create /*amazing videos*/ to enjoy and share',
            'text_rotator_interval' => '5000',
            'overlay_color'         => '1',
            'overlay_type'          => 'gradient',
            'color_1'               => '#1d2671',
            'color_2'               => '#4568dc',
            'gradient_type'         => '45',
            'animation_in'          => 'animate__fadeInDown',
            'animation_out'         => 'animate__fadeOut',
        ]);
    }
}
