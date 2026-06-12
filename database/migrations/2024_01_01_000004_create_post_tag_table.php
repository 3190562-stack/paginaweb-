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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();                                                       // clave primaria, entero autoincremental
            $table->foreignId('post_id')->constrained()->onDelete('cascade');  // clave foránea → posts
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');   // clave foránea → tags
            $table->timestamps();                                               // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
