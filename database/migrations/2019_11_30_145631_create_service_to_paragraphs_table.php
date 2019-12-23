<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceToParagraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_to_paragraphs', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->unsignedInteger('paragraph_id');
            $table
                ->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
            $table
                ->foreign('paragraph_id')
                ->references('id')
                ->on('paragraphs')
                ->onDelete('cascade');
            $table->primary(['service_id', 'paragraph_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_to_paragraphs');
    }
}
