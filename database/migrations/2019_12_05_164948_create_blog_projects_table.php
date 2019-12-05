<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lang_id');
            $table->string('title');
            $table->text('subtitle_text');
            $table->string('keep_reading');
            $table->string('footer_title');
            $table->string('footer_btn_title');
            $table->timestamps();
            $table
                ->foreign('lang_id')
                ->references('id')
                ->on('langs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_projects');
    }
}
