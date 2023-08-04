<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('frscs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('license_no')->unique();
            $table->string('category');
            $table->string('date_of_birth');
            $table->string('address');
            $table->string('sex');
            $table->string('height');
            $table->string('frst_iss_state');
            $table->string('blood_group');
            $table->string('facial_mark');
            $table->string('glasses');
            $table->string('replace_no');
            $table->string('renewal_no')->unique();
            $table->string('next_of_kin');
            $table->string('date_of_1st_ISS');
            $table->string('ISS')->unique();
            $table->string('EXP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frscs');
    }
};
