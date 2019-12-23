<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutToParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_to_paragraphs', function (Blueprint $table) {
            $table->unsignedInteger('about_us_page_id');
            $table->unsignedInteger('paragraph_id');
            $table
                ->foreign('about_us_page_id')
                ->references('id')
                ->on('about_us_pages')
                ->onDelete('cascade');
            $table
                ->foreign('paragraph_id')
                ->references('id')
                ->on('paragraphs')
                ->onDelete('cascade');
            $table->primary(['about_us_page_id', 'paragraph_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_to_paragraphs');
    }
}
