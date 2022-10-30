<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->string('name');
            $table->string('name_english');
            $table->text('explanation')->nullable(true);
            $table->string('icon_path')->nullable(true);
            $table->string('main_image_path')->nullable(true);
            $table->smallInteger('chronological_age_begin')->nullable(true);
            $table->smallInteger('chronological_age_end')->nullable(true);
            $table->double('overall_length_begin')->nullable(true);
            $table->double('overall_length_end')->nullable(true);
            $table->double('overall_height_begin')->nullable(true);
            $table->double('overall_height_end')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creatures');
    }
};
