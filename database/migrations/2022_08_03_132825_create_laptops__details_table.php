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
        Schema::create('laptops__details', function (Blueprint $table) {
            $table->id();
            $table->string('laptops_id');
            $table->string('description');
            $table->string('class');
            $table->string('processor');
            $table->string('speed');
            $table->string('screen_size');
            $table->string('color');
            $table->string('hard_disk_size');
            $table->string('cpu_model');
            $table->string('ram_memory');
            $table->string('operating_system');
            $table->string('card_description');
            $table->string('graphics_coprocessor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops__details');
    }
};
