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
        Schema::create('article_produks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_produks');
    }
};
