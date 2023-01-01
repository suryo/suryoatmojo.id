<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->boolean('enable');
            $table->string('title');
            $table->string('type');
            $table->text('short_desc');
            $table->string('images_code');
            $table->text('description');
            $table->text('image')->nullable();
            $table->text('image_more_1')->nullable();
            $table->text('image_more_2')->nullable();
            $table->text('video')->nullable();
            $table->text('info');
            $table->integer('order');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('project_category');

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
        Schema::dropIfExists('project');
    }
}
