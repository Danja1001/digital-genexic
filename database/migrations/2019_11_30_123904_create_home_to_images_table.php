<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_to_images', function (Blueprint $table) {
            $table->unsignedInteger('home_page_id');
            $table->unsignedInteger('image_id');
            $table
                ->foreign('home_page_id')
                ->references('id')
                ->on('home_pages')
                ->onDelete('cascade');
            $table
                ->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
            $table->primary(['home_page_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_to_images');
    }
}
