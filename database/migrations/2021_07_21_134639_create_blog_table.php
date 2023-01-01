<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_desc')->nullable();
            $table->text('text');
            $table->text('type');
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('quote_text')->nullable();
            $table->text('quote_author')->nullable();
            $table->string('author');
            $table->string('slug');
            $table->string('status');
            $table->string('images_code');
            $table->integer('order');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('blog_category');

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
        Schema::dropIfExists('blog');
    }
}
