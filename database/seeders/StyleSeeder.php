<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_style')->insert([
            'light_head_color'              => '#333333',
            'light_main_color'              => '#989dbb',
            'light_accent_color'            => '#5e3aee',
            'light_accent_hover_color'      => '#4a28d2',
            'light_back_main_color'         => '#ffffff',
            'light_back_secondary_color'    => '#eeeeee',
            
            'dark_head_color'              => '#ffffff',
            'dark_main_color'              => '#cccccc',
            'dark_accent_color'            => '#eeeeee',
            'dark_accent_hover_color'      => '#ffffff',
            'dark_back_main_color'         => '#333333',
            'dark_back_secondary_color'    => '#777777',
            
            'font_head'    => 'Playfair+Display',
            'font_main'    => 'Roboto',
        ]);
    }
}
