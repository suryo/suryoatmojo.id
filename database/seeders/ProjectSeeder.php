<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_001',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_8708.jpg',
            'image_more_1'  => 'demo/img/work/project_image_8704.jpg',
            'image_more_2'  => 'demo/img/work/project_image_8705.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 1,
            'category_id'   => 1,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'gallery',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_002',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_3833.jpg',
            'image_more_1'  => 'demo/img/work/project_image_3834.jpg',
            'image_more_2'  => 'demo/img/work/project_image_3835.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 2,
            'category_id'   => 3,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'video',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_003',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_5551.jpg',
            'image_more_1'  => 'demo/img/work/project_image_5552.jpg',
            'image_more_2'  => 'demo/img/work/project_image_5553.jpg',
            'video'         => '<iframe title="vimeo-player" src="https://player.vimeo.com/video/52262947?h=d12d996945" width="900" height="500" frameborder="0" allowfullscreen></iframe>',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 3,
            'category_id'   => 2,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_004',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_168.jpg',
            'image_more_1'  => 'demo/img/work/project_image_5937.jpg',
            'image_more_2'  => 'demo/img/work/project_image_5938.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 4,
            'category_id'   => 1,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'gallery',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_005',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_5784.jpg',
            'image_more_1'  => 'demo/img/work/project_image_8555.jpg',
            'image_more_2'  => 'demo/img/work/project_image_8556.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 5,
            'category_id'   => 3,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'video',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_006',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_5330.jpg',
            'image_more_1'  => 'demo/img/work/project_image_5331.jpg',
            'image_more_2'  => 'demo/img/work/project_image_5332.jpg',
            'video'         => '<iframe title="vimeo-player" src="https://www.youtube.com/embed/kn-1D5z3-Cs" width="900" height="500" frameborder="0" allowfullscreen></iframe>',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 6,
            'category_id'   => 2,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_007',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_6487.jpg',
            'image_more_1'  => 'demo/img/work/project_image_9176.jpg',
            'image_more_2'  => 'demo/img/work/project_image_9177.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 7,
            'category_id'   => 1,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_008',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_9837.jpg',
            'image_more_1'  => 'demo/img/work/project_image_5931.jpg',
            'image_more_2'  => 'demo/img/work/project_image_5932.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 8,
            'category_id'   => 3,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'video',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_009',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_2983.jpg',
            'image_more_1'  => 'demo/img/work/project_image_2984.jpg',
            'image_more_2'  => 'demo/img/work/project_image_2985.jpg',
            'video'         => '<iframe title="vimeo-player" src="https://player.vimeo.com/video/52262947?h=d12d996945" width="900" height="500" frameborder="0" allowfullscreen></iframe>',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 9,
            'category_id'   => 2,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_010',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_896.jpg',
            'image_more_1'  => 'demo/img/work/project_image_2618.jpg',
            'image_more_2'  => 'demo/img/work/project_image_2619.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 10,
            'category_id'   => 1,
        ]);

        DB::table('project')->insert([
            'enable'        => 1,
            'title'         => 'Lorem ipsum dolor sit amet adipiscing',
            'type'          => 'standard',
            'short_desc'    => 'Lorem ipsum dolor sit amet, consectetur adicing elit pellente enim leo ipsum.',
            'images_code'   => 'project_011',
            'description'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a ligula pellentesque, malesuada orci cursus, lacinia sem. In in rutrum enim. Nam sed lectus ac nulla molestie maximus. Fusce aliquet nulla ut sapien volutpat luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam cursus odio interdum facilisis posuere.</p>
            <blockquote class="blockquote">Phasellus sit amet nulla quis odio egestas dictum. Aenean accumsan, felis a blandit eleifend, neque urna lacinia neque, vitae molestie mi est quis felis. Etiam blandit dui non ullamcorper pharetra. Donec eget efficitur leo.</blockquote>
            <p>Duis sagittis ex lectus, ac tincidunt libero viverra ullamcorper. Mauris sapien nisl, interdum non lectus eu, tempor fermentum lacus. Fusce cursus ipsum facilisis neque tempor tempus. Ut suscipit, nunc sed tristique luctus, elit tortor semper orci, non sodales turpis felis a purus. Aliquam nibh odio, sollicitudin eget vestibulum ut, euismod non turpis.</p>
            <ul>
            <li>Praesent imperdiet lorem sapien.</li>
            <li>Sed et finibus urna. Integer ante est.</li>
            <li>Placerat ac dui et, vehicula cursus nisi.</li>
            <li>Ut fermentum mauris dictum.</li>
            <li>Aenean ultricies mauris vitae.</li>
            </ul>',
            'image'         => 'demo/img/work/project_image_9860.jpg',
            'image_more_1'  => 'demo/img/work/project_image_3134.jpg',
            'image_more_2'  => 'demo/img/work/project_image_3135.jpg',
            'video'         => '',
            'info'          => '[{"title":"Client","text":"Company name"},{"title":"Date","text":"19 Oct 21"},{"title":"Website","text":"www.domain.com"},{"title":"Project Lead","text":"Juwel Khan"}]',
            'order'         => 11,
            'category_id'   => 3,
        ]);
    }
}
