<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageStyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_style', function (Blueprint $table) {
            $table->id();
            $table->string('light_head_color');
            $table->string('light_main_color');
            $table->string('light_accent_color');
            $table->string('light_accent_hover_color');
            $table->string('light_back_main_color');
            $table->string('light_back_secondary_color');

            $table->string('dark_head_color');
            $table->string('dark_main_color');
            $table->string('dark_accent_color');
            $table->string('dark_accent_hover_color');
            $table->string('dark_back_main_color');
            $table->string('dark_back_secondary_color');
            
            $table->string('font_head');
            $table->string('font_main');

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
        Schema::dropIfExists('page_style');
    }
}
