<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('email')->nullable();
            $table->string('muic_account')->nullable();
            $table->string('name_thai');
            $table->string('surname_thai');
            $table->string('name');
            $table->string('surname');
            $table->string('position_thai')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->string('degree')->nullable();
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
        Schema::dropIfExists('staff_profiles');
    }
};
