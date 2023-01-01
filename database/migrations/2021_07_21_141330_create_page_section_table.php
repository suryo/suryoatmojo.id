<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_section', function (Blueprint $table) {
            $table->id();

            $table->boolean('slider_enable');
            $table->unsignedBigInteger('slider_id')->nullable();
            $table->foreign('slider_id')->references('id')->on('slider');

            $table->boolean('about_enable');
            $table->string('about_scheme_color');
            $table->string('about_menu');
            $table->boolean('skills_enable');
            $table->string('skills_subtitle')->nullable();
            $table->string('skills_title')->nullable();
            $table->string('skills_scheme_color');
            $table->string('skills_background')->nullable();
            $table->boolean('testimonial_enable');
            $table->boolean('testimonial_autoplay');
            $table->string('testimonial_scheme_color');
            $table->string('testimonial_background')->nullable();
            $table->integer('testimonial_interval');
            $table->boolean('services_enable');
            $table->string('services_subtitle')->nullable();
            $table->string('services_title')->nullable();
            $table->string('services_scheme_color');
            $table->string('services_columns');
            $table->string('services_background')->nullable();

            $table->boolean('projects_enable');
            $table->string('projects_subtitle')->nullable();
            $table->string('projects_title')->nullable();
            $table->string('projects_scheme_color');
            $table->string('projects_menu')->nullable();
            $table->string('projects_style');
            $table->string('projects_background')->nullable();
            
            $table->boolean('blog_enable');
            $table->string('blog_subtitle')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_scheme_color');
            $table->string('blog_menu')->nullable();
            $table->integer('blog_columns');
            $table->string('blog_background')->nullable();

            $table->boolean('contact_enable');
            $table->string('contact_subtitle')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_scheme_color');
            $table->string('contact_menu')->nullable();
            $table->text('contact_text')->nullable();
            $table->boolean('map_enable');

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
        Schema::dropIfExists('page_section');
    }
}
