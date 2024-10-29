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
        Schema::table('majors', function (Blueprint $table) {
            // Удаляем колонки duration_local и duration_abroad
            $table->dropColumn(['duration_local', 'duration_abroad']);

            // Добавляем колонку для пути к картинке
            $table->text('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('majors', function (Blueprint $table) {
            // Откат - восстанавливаем duration_local и duration_abroad
            $table->integer('duration_local');
            $table->integer('duration_abroad');

            // Удаляем колонку image_path
            $table->dropColumn('image_path');
        });
    }
};
