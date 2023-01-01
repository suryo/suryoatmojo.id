<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_map')->insert([
            'latitude'      => '42.814681',
            'longitude'     => '-1.6495237000000316',
            'zoom'          => '17',
            'map_style'     => 'lightgrey',
            'map_key'       => 'XXXX-XXXX-XXXX-XXXX',
            'map_text'      => 'Calle Sandoval 31001<br>Pamplona (Spain)',
            'icon_image'    => null,
        ]);
    }
}
