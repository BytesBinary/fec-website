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
        Schema::create('common_resources', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->enum("type",['notice','syllabus','curriculumns','others']);
            $table->string("date");
            $table->string("session")->nullable();
            $table->string("pdf");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('common_resources');
    }
};
