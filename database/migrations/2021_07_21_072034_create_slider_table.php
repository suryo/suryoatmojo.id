<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('video')->nullable();
            $table->string('video_type')->nullable();
            $table->string('image_video')->nullable();
            $table->string('color_scheme');
            $table->boolean('text_rotator');
            $table->text('text');
            $table->integer('text_rotator_interval')->nullable();

            $table->boolean('overlay_color');
            $table->string('overlay_type')->nullable();
            $table->string('color_1')->nullable();
            $table->string('color_2')->nullable();
            $table->string('gradient_type')->nullable();
            
            $table->string('animation_in')->nullable();
            $table->string('animation_out')->nullable();
            
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
        Schema::dropIfExists('slider');
    }
}
