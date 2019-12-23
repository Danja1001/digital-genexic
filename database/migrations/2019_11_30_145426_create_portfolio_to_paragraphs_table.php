<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioToParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_to_paragraphs', function (Blueprint $table) {
            $table->unsignedInteger('portfolio_page_id');
            $table->unsignedInteger('paragraph_id');
            $table
                ->foreign('portfolio_page_id')
                ->references('id')
                ->on('portfolio_pages')
                ->onDelete('cascade');
            $table
                ->foreign('paragraph_id')
                ->references('id')
                ->on('paragraphs')
                ->onDelete('cascade');
            $table->primary(['portfolio_page_id', 'paragraph_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_to_paragraphs');
    }
}
