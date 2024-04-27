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
        /*
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 155);
            $table->string('lastname', 155);
            $table->char('phone', 9)->nullable();
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
