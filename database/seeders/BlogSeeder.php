<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title'         => 'Lorem ipsum dolor sit amet consectetur adipiscing',
            'short_desc'    => 'Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta ultricies.',
            'text'          => '<p><img src="'.url('/').'/demo/img/blog/post_2038_01.jpg" style="float: right;" class="note-float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuer maur sapien nisl, interdum non lectus eu, tempor fermentum lacus.</p><h3>Phasellus sit amet nulla quis<br>odio egestas dictum</h3><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p><p class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</p><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus.<br></p><ul class="columns-2"><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li><li>Placerat ac dui et, vehicula cursus nisi.</li><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li></ul><p><img src="'.url('/').'/demo/img/blog/post_2038_02.jpg" style="float: left;" class="note-float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim.&nbsp;<br>Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus.</p>',
            'type'          => 'standard',
            'image'         => 'demo/img/blog/post_image_6429.jpg',
            'video'         => '',
            'quote_text'    => '',
            'quote_author'  => '',
            'author'        => 'Creabox',
            'slug'          => 'lorem-ipsum-1',
            'status'        => 'published',
            'images_code'   => 'post_2038',
            'order'         => 1,
            'category_id'   => 1,
        ]);

        DB::table('blog')->insert([
            'title'         => 'Lorem ipsum dolor sit amet consectetur adipiscing',
            'short_desc'    => 'Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta ultricies.',
            'text'          => '<p><img src="'.url('/').'/demo/img/blog/post_1073_01.jpg" style="float: right;" class="note-float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuer maur sapien nisl, interdum non lectus eu, tempor fermentum lacus.</p><h3>Phasellus sit amet nulla quis<br>odio egestas dictum</h3><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p><p class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</p><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus.<br></p><ul class="columns-2"><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li><li>Placerat ac dui et, vehicula cursus nisi.</li><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li></ul><p><img src="'.url('/').'/demo/img/blog/post_1073_02.jpg" style="float: left;" class="note-float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim.&nbsp;<br>Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus.</p>',
            'type'          => 'standard',
            'image'         => 'demo/img/blog/post_image_8644.jpg',
            'video'         => '',
            'quote_text'    => '',
            'quote_author'  => '',
            'author'        => 'Creabox',
            'slug'          => 'lorem-ipsum-2',
            'status'        => 'published',
            'images_code'   => 'post_1073',
            'order'         => 6,
            'category_id'   => 2,
        ]);

        DB::table('blog')->insert([
            'title'         => 'Lorem ipsum dolor sit amet consectetur adipiscing',
            'short_desc'    => 'Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta ultricies.',
            'text'          => '<p><img src="'.url('/').'/demo/img/blog/post_5384_01.jpg" style="float: right;" class="note-float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuer maur sapien nisl, interdum non lectus eu, tempor fermentum lacus.</p><h3>Phasellus sit amet nulla quis<br>odio egestas dictum</h3><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p><p class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</p><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus.<br></p><ul class="columns-2"><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li><li>Placerat ac dui et, vehicula cursus nisi.</li><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li></ul><p><img src="'.url('/').'/demo/img/blog/post_5384_02.jpg" style="float: left;" class="note-float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim.&nbsp;<br>Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus.</p>',
            'type'          => 'gallery',
            'image'         => '',
            'video'         => '',
            'quote_text'    => '',
            'quote_author'  => '',
            'author'        => 'Creabox',
            'slug'          => 'lorem-ipsum-3',
            'status'        => 'published',
            'images_code'   => 'post_5384',
            'order'         => 3,
            'category_id'   => 1,
        ]);

        DB::table('blog')->insert([
            'title'         => 'Lorem ipsum dolor sit amet consectetur adipiscing',
            'short_desc'    => 'Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta ultricies.',
            'text'          => '<p><img src="'.url('/').'/demo/img/blog/post_6737_01.jpg" style="float: right;" class="note-float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuer maur sapien nisl, interdum non lectus eu, tempor fermentum lacus.</p><h3>Phasellus sit amet nulla quis<br>odio egestas dictum</h3><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p><p class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</p><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus.<br></p><ul class="columns-2"><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li><li>Placerat ac dui et, vehicula cursus nisi.</li><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li></ul><p><img src="'.url('/').'/demo/img/blog/post_6737_02.jpg" style="float: left;" class="note-float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim.&nbsp;<br>Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus.</p>',
            'type'          => 'quote',
            'image'         => '',
            'video'         => '',
            'quote_text'    => 'In the design process, my gut instinct is my best critic. I just wished I would always listen to it!',
            'quote_author'  => 'John Smith',
            'author'        => 'Creabox',
            'slug'          => 'lorem-ipsum-4',
            'status'        => 'published',
            'images_code'   => 'post_6737',
            'order'         => 4,
            'category_id'   => 2,
        ]);

        DB::table('blog')->insert([
            'title'         => 'Lorem ipsum dolor sit amet consectetur adipiscing',
            'short_desc'    => 'Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta ultricies.',
            'text'          => '<p><img src="'.url('/').'/demo/img/blog/post_1166_01.jpg" style="float: right;" class="note-float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuer maur sapien nisl, interdum non lectus eu, tempor fermentum lacus.</p><h3>Phasellus sit amet nulla quis<br>odio egestas dictum</h3><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p><p class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</p><p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus.<br></p><ul class="columns-2"><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li><li>Placerat ac dui et, vehicula cursus nisi.</li><li>Praesent imperdiet lorem sapien.</li><li>Sed et finibus urna. Integer ante est.</li></ul><p><img src="'.url('/').'/demo/img/blog/post_1166_02.jpg" style="float: left;" class="note-float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim.&nbsp;<br>Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus.</p>',
            'type'          => 'video',
            'image'         => '',
            'video'         => '<iframe title="vimeo-player" src="https://www.youtube.com/embed/kn-1D5z3-Cs" width="900" height="500" frameborder="0" allowfullscreen></iframe>',
            'quote_text'    => '',
            'quote_author'  => '',
            'author'        => 'Creabox',
            'slug'          => 'lorem-ipsum-5',
            'status'        => 'published',
            'images_code'   => 'post_1166',
            'order'         => 5,
            'category_id'   => 1,
        ]);
        
    }
}
