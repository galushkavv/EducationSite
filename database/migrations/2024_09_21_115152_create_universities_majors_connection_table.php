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
        Schema::create('universities_majors', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('major_id');

            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
            $table->unique(['university_id', 'major_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities_majors_connection');
    }
};
