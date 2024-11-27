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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('post_title');
            $table->string('post_type');
            $table->string('post_status')->default('publish');
            $table->string('post_category');
            $table->foreignUuid('post_author')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('post_parent')->nullable()->constrained('posts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('post_slug')->unique();
            $table->longText('post_content');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
