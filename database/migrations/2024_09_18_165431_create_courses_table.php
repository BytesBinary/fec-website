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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('code');
            $table->longText('description')->nullable();
            $table->string('department');
            $table->enum('type',['theory','lab','thesis']);
            $table->string('credit');
            $table->enum('semester',['1st','2nd','3rd', '4th', '5th', '6th', '7th', '8th']);
            $table->string('assigned_teachers_ids')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
