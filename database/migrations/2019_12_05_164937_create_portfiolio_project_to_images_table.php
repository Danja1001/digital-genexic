<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfiolioProjectToImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_project_to_images', function (Blueprint $table) {
            $table->unsignedInteger('port_proj_id');
            $table->unsignedInteger('image_id');
            $table
                ->foreign('port_proj_id')
                ->references('id')
                ->on('portfolio_projects')
                ->onDelete('cascade');
            $table
                ->foreign('image_id')
                ->references('id')
                ->on('images')
                ->onDelete('cascade');
            $table->primary(['port_proj_id', 'image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfiolio_project_to_images');
    }
}
