<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogProjectToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_project_to_images', function (Blueprint $table) {
            $table->unsignedInteger('blog_project_id');
            $table->unsignedInteger('image_id');
            $table
                ->foreign('blog_project_id')
                ->references('id')
                ->on('blog_projects')
                ->onDelete('cascade');
            $table
                ->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
            $table->primary(['blog_project_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_project_to_images');
    }
}
