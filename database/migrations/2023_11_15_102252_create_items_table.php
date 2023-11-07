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
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('asset_number');
            $table->string('serial_number');
            $table->string('asset_name')->nullable();
            $table->foreignId('item_status_id');
            $table->foreign('item_status_id')->references('id')->on('objectives');
            $table->string('asset_group');
            $table->date('asset_date');
            $table->foreignId('objective_id');
            $table->foreign('objective_id')->references('id')->on('objectives');
            $table->foreignId('project_type_id');
            $table->foreign('project_type_id')->references('id')->on('project_types');
            $table->foreignId('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedInteger('staff_profile_id')->nullable();
            $table->foreignId('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreignId('item_type_id');
            $table->foreign('item_type_id')->references('id')->on('item_types');
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('generation');
            $table->string('ram_type')->nullable();
            $table->string('ram_unit')->nullable();
            $table->unsignedInteger('os_id')->nullable();
            $table->string('harddisk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};