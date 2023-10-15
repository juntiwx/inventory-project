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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('asset_number');
            $table->string('serial_number');
            $table->string('asset_name');
            $table->string('asset_status');
            $table->string('asset_group');
            $table->string('asset_date')->nullable();
            $table->string('objective');
            $table->string('project_service');
            $table->string('owner');
            $table->string('department_owner');
            $table->string('location');
            $table->string('asset_type');
            $table->string('brand');
            $table->string('generation');
            $table->string('ram_type');
            $table->string('ram_unit');
            $table->string('asset_os');
            $table->string('harddisk');
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
        Schema::dropIfExists('items');
    }
};
