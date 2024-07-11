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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('poster');
            $table->string('link');
            $table->text('description');
            $table->unsignedBigInteger('app_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('playlist_id');
            $table->string('language');
            $table->integer('year');
            $table->timestamps();
            $table->foreign('app_id')->references('id')->on('apps')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
