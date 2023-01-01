<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_footer')->insert([
            'columns'           => 3,
            
            'column_1_subtitle' => 'Contact me',
            'column_1_title'    => 'email@domain.com',
            'column_1_content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit maecenas tempor faucibus nisiacmollis sed.',
            'column_1_social'   => 0,
            
            'column_2_subtitle' => 'My address',
            'column_2_title'    => 'New York',
            'column_2_content'  => '111 8th Ave, floor 16<br>New York, NY 10011<br>EEUU',
            'column_2_social'   => 0,
            
            'column_3_subtitle' => 'Social Networks',
            'column_3_title'    => 'Follow me',
            'column_3_content'  => 'Lorem ipsum dolor sit amet consectetur adipiscing elit.',
            'column_3_social'   => 1,
            
            'column_4_subtitle' => null,
            'column_4_title'    => null,
            'column_4_content'  => null,
            'column_4_social'   => 0,
            
            'copyright'         => 'Copyright © 2021 <a href="#" title="">Blanco</a> - All rights reserved.',
            'top_button'        => 1,
        ]);
    }
}
