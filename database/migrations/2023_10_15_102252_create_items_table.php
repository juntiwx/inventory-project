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
            $table->string('asset_status');
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
            $table->string('asset_type');
            $table->string('brand');
            $table->string('generation');
            $table->string('ram_type')->nullable();
            $table->string('ram_unit')->nullable();
            $table->string('asset_os')->nullable();
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
