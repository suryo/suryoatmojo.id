<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_setting', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->text('analytics_code')->nullable();
            $table->text('social_links');
            $table->text('image_favicon');
            $table->text('image_logo_header_dark');
            $table->text('image_logo_header_light');
            $table->string('menu_position');
            $table->boolean('loader');
            $table->text('image_logo_loader');
            $table->string('loader_scheme_color');
            
            $table->boolean('cookies_enable');
            $table->string('cookies_style');
            $table->string('cookies_color');
            $table->string('cookies_alignment');
            $table->string('cookies_title')->nullable();
            $table->text('cookies_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_setting');
    }
}
