<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('page_section')->insert([
            'slider_enable'         => 1,
            'slider_id'             => 1,

            'about_enable'          => 1,
            'about_scheme_color'    => 'light-scheme',
            'about_menu'            => 'About me',
            'skills_enable'         => 1,
            'skills_subtitle'       => '01 - SKILLS',
            'skills_title'          => 'Look at my Skills, Education and Employment Experiences',
            'skills_scheme_color'   => 'light-scheme',
            'skills_background'     => 'demo/img/sections/skills_background.png',
            'testimonial_enable'    => 1,
            'testimonial_autoplay'  => 0,
            'testimonial_scheme_color'  => 'dark-scheme',
            'testimonial_background'    => '',
            'testimonial_interval'      => 2000,
            'services_enable'           => 1,
            'services_subtitle'         => '02 - SERVICES',
            'services_title'        => 'Create amazing digital experiences',
            'services_scheme_color' => 'light-scheme',
            'services_columns'      => '4',
            'services_background'   => 'demo/img/sections/services_background.jpg',

            'projects_enable'       => 1,
            'projects_subtitle'     => '03 - PORTFOLIO',
            'projects_title'        => 'Check out all the works made in the last years',
            'projects_scheme_color' => 'light-scheme',
            'projects_menu'         => 'Work',
            'projects_style'        => '1',
            'projects_background'   => 'demo/img/sections/projects_background.png',

            'blog_enable'           => 1,
            'blog_subtitle'         => '04 - BLOG',
            'blog_title'            => 'Stay update with the last news of our blog',
            'blog_scheme_color'     => 'light-scheme',
            'blog_menu'             => 'Blog',
            'blog_columns'          => '3',
            'blog_background'       => 'demo/img/sections/blog_background.png',

            'contact_enable'        => 1,
            'contact_subtitle'      => '05 - CONTACT',
            'contact_title'         => 'Any Questions? Feel free to contact',
            'contact_scheme_color'  => 'dark-scheme',
            'contact_menu'          => 'Contact',
            'contact_text'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget porta ante. Curabitur dignissim nibh dui, quis placerat ante accumsan id.',
            'map_enable'            => 1,
        ]);
    }
}
