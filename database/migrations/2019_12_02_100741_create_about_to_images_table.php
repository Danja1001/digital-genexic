<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_to_images', function (Blueprint $table) {
            $table->unsignedInteger('about_us_page_id');
            $table->unsignedInteger('image_id');
            $table
                ->foreign('about_us_page_id')
                ->references('id')
                ->on('about_us_pages')
                ->onDelete('cascade');
            $table
                ->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
            $table->primary(['about_us_page_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_to_images');
    }
}
