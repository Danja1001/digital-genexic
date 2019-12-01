<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingProccessServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_proccess_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('working_process_id');
            $table->string('name');
            $table->text('text');
            $table->timestamps();
            $table
                ->foreign('working_process_id')
                ->references('id')
                ->on('working_proccesses')
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
        Schema::dropIfExists('working_proccess_services');
    }
}
