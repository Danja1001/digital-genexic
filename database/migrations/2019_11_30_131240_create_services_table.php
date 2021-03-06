<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lang_id');
            $table->unsignedInteger('service_category_id');

            $table->string('head_title');

            $table->string('name');
            $table->string('title');
            $table->text('text');

            $table->string('footer_title');
            $table->string('footer_btn_title');

            $table->timestamps();
            $table
                ->foreign('lang_id')
                ->references('id')
                ->on('langs')
                ->onDelete('cascade');
            $table
                ->foreign('service_category_id')
                ->references('id')
                ->on('service_categories')
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
        Schema::dropIfExists('services');
    }
}
