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
        Schema::create('console_video', function (Blueprint $table) {
            $table->unsignedBigInteger('video_id');
            $table->unsignedBigInteger('console_id');
            $table->timestamps();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->foreign('console_id')->references('id')->on('consoles')->onDelete('cascade');
            $table->primary(['video_id', 'console_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('console_video');
    }
};
