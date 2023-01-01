<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')->insert([
            'icon'          => 'fa-solid fa-business-time',
            'title'         => 'Business and Brand Strategy',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '1',
        ]);
        DB::table('service')->insert([
            'icon'          => 'fa-solid fa-mobile-screen-button',
            'title'         => 'Mobile and Desktop Applications',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '2',
        ]);
        DB::table('service')->insert([
            'icon'          => 'fa-solid fa-bullseye',
            'title'         => 'Game Design & Development',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '3',
        ]);
        DB::table('service')->insert([
            'icon'          => 'fa-solid fa-desktop',
            'title'         => 'Web Design & Development',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '4',
        ]);
        DB::table('service')->insert([
            'icon'          => 'fa-solid fa-camera-retro',
            'title'         => 'Product and Social Photography',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '5',
        ]);
        DB::table('service')->insert([
            'icon'          => 'fa-regular fa-comments',
            'title'         => 'Social Marketing',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'info'          => '[{"title":"Vivamus feugiat","text":""},{"title":"Habitasse platea ditums","text":""},{"title":"Donec placerat dignissim,","text":""},{"title":"Nam luctus vulputate","text":""}]',
            'order'         => '6',
        ]);
    }
}
