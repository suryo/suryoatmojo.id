<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_footer', function (Blueprint $table) {
            $table->id();
            $table->integer('columns');
            
            $table->string('column_1_title')->nullable();
            $table->string('column_1_subtitle')->nullable();
            $table->text('column_1_content')->nullable();
            $table->boolean('column_1_social');
            $table->string('column_2_title')->nullable();
            $table->string('column_2_subtitle')->nullable();
            $table->text('column_2_content')->nullable();
            $table->boolean('column_2_social');
            $table->string('column_3_title')->nullable();
            $table->string('column_3_subtitle')->nullable();
            $table->text('column_3_content')->nullable();
            $table->boolean('column_3_social');
            $table->string('column_4_title')->nullable();
            $table->string('column_4_subtitle')->nullable();
            $table->text('column_4_content')->nullable();
            $table->boolean('column_4_social');

            $table->text('copyright')->nullable();
            $table->boolean('top_button');

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
        Schema::dropIfExists('page_footer');
    }
}
