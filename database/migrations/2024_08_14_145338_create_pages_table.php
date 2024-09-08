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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->longText('page_content')->nullable();
            $table->string('page_sections');
            $table->string('page_type')->nullable();
            $table->string('page_parent')->nullable();
            $table->string('page_status')->default('publish');
            $table->string('page_slug')->unique();
            $table->enum('is_editable', ['true','false'])->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
