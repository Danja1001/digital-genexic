<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogProjectToParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_project_to_paragraphs', function (Blueprint $table) {
            $table->unsignedInteger('blog_proj_id');
            $table->unsignedInteger('paragraph_id');
            $table
                ->foreign('blog_proj_id')
                ->references('id')
                ->on('blog_projects')
                ->onDelete('cascade');
            $table
                ->foreign('paragraph_id')
                ->references('id')
                ->on('paragraphs')
                ->onDelete('cascade');
            $table->primary(['blog_proj_id', 'paragraph_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_project_to_paragraphs');
    }
}
