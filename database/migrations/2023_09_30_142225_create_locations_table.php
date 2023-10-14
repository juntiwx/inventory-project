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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('building_name');
            $table->string('room_name');
            $table->string('room_number');
            $table->string('floor');
            $table->string('normal_seat');
            $table->string('max_seat');
            $table->string('exam_seat');
            $table->string('room_type');
            $table->string('use_group');
            $table->string('remark');
            $table->string('status');
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
        Schema::dropIfExists('locations');
    }
};
