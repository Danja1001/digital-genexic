<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioProjectToParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_project_to_paragraphs', function (Blueprint $table) {
            $table->unsignedInteger('pproj_id');
            $table->unsignedInteger('paragraph_id');
            $table
                ->foreign('pproj_id')
                ->references('id')
                ->on('portfolio_projects')
                ->onDelete('cascade');
            $table
                ->foreign('paragraph_id')
                ->references('id')
                ->on('paragraphs')
                ->onDelete('cascade');
            $table->primary(['pproj_id', 'paragraph_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_project_to_paragraphs');
    }
}
