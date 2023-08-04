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
        Schema::create('immigrations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('type');
            $table->string('country_code');
            $table->string('passport_no')->unique();
            $table->string('nationality');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('place_of_birth');
            $table->string('personal_no')->unique();
            $table->string('authority');
            $table->string('date_of_issue');
            $table->string('date_of_expiry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immigrations');
    }
};
