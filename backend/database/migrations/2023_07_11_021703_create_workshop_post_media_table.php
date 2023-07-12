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
        Schema::create('workshop_post_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workshop_post_id');
            $table->foreign('workshop_post_id')
            ->references('id')
            ->on('workshop_posts')
            ->onDelete('cascade');
            $table->unsignedBigInteger('media_id');
            $table->foreign('media_id')
            ->references('id')
            ->on('media')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshop_post_media');
    }
};
