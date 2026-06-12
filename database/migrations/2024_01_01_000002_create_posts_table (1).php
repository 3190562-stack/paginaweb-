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
            $table->id();                                          // clave primaria, entero autoincremental
            $table->string('title');                               // título del artículo
            $table->longText('content');                           // contenido del artículo
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // clave foránea → users
            $table->timestamps();                                  // created_at y updated_at
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
