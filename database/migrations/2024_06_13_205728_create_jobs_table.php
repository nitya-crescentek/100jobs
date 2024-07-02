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
        Schema::create('jobs', function (Blueprint $table) {
            $table -> id();
            $table-> string('role');
            $table-> string('company')->nullable();
            $table->string('company_website')->nullable();
            $table-> string('location');
            $table-> string('job_type');
            $table->string('category')->nullable();
            $table-> string('description');
            $table-> integer('salary')->nullable();
            $table-> string('skills')->nullable();
            $table->string('qualification')->nullable();
            $table->unsignedBigInteger('user_id'); // Define the user_id column as unsignedBigInteger
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
