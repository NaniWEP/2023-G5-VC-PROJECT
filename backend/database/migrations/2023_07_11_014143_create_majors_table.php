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
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('year_duration');
            $table->integer('month_duration');
            $table->date('apply_date');
            $table->date('start_date');
            $table->integer('price');
            $table->unsignedBigInteger('major_type_id');
            $table->foreign('major_type_id')
            ->references('id')
            ->on('major_types')
            ->onDelete('cascade');
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id')
            ->references('id')
            ->on('universities')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
