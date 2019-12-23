<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lang_id');

            $table->string('title');
            
            $table->string('card_title');
            $table->string('card_email');
            $table->string('card_phone');
            $table->string('card_city');

            $table->text('form_text');
            $table->string('form_name');
            $table->string('form_email');
            $table->string('form_phone');
            $table->string('form_btn');

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
        Schema::dropIfExists('contact_pages');
    }
}
