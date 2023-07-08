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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->string('organizer');
            $table->string('contact');
            $table->boolean('status');
            $table->unsignedBigInteger('school_manager_id');
            $table->foreign('school_manager_id')
            ->references('id')
            ->on('school_managers')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
