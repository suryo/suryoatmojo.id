<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_setting')->insert([
            'title'                 => 'Blanco Portfolio',
            'description'           => 'A great portfolio to show your work created with Laravel',

            'keywords'              => '[{"title":"web developer","text":""},{"title":"resume","text":""},{"title":"responsive","text":""},{"title":"portfolio","text":""},{"title":"personal","text":""},{"title":"one page","text":""},{"title":"modern","text":""},{"title":"minimal","text":""},{"title":"interactive","text":""},{"title":"freelancer","text":""},{"title":"creative","text":""},{"title":"clean","text":""},{"title":"blog","text":""}]',

            'analytics_code'        => '',
            'social_links'          => '[{"title":"fab fa-facebook-f","text":"http://#"},{"title":"fab fa-twitter","text":"http://#"},{"title":"fab fa-instagram","text":"http://#"},{"title":"fab fa-linkedin-in","text":"http://#"}]',

            'image_favicon'             => 'uploads/img/general/favicon/favicon.png',
            'image_logo_header_dark'    => 'demo/img/general/logo_header_dark.png',
            'image_logo_header_light'   => 'demo/img/general/logo_header_light.png',
            'menu_position'         => 'center',
            'loader'                => 1,
            'image_logo_loader'     => 'demo/img/general/loader.png',
            'loader_scheme_color'   => 'dark-scheme',

            'cookies_enable'  => 1,
            'cookies_style'  => 'boxed-left',
            'cookies_color'  => 'light-scheme',
            'cookies_alignment'  => 'start',
            'cookies_title'  => 'Cookies title',
            'cookies_text'  => 'This website uses cookies, if you stay here you accept its use. You can read more about the use of cookies in our <a href="#">privacy policy</a>',

        ]);
    }
}