<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_info')->insert([
            'image'         => 'demo/img/personal/kate_smith.png',
            'title'         => 'I’m<br>/*Kate Smith,*/<br> UI/UX designer based in New York',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lobortis velit a mauris luctus, sit amet venenatis nulla suscipit.  ',
            'cv_enable'     => '1',
            'cv_text'       => 'Download CV',
            'cv_file'       => 'demo/files/personal/cv_file_440.pdf',
            'info'          => '[{"title":"Projects completed","text":"120"},{"title":"Years experience","text":"12"},{"title":"Design awwards","text":"6"},{"title":"Happy clients","text":"50"}]',
        ]);
    }
}
