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
        // Создание таблицы для переводов информации об университетах
        Schema::create('university_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('university_id');
            $table->string('locale', 5);
            $table->string('name');
            $table->text('summary')->nullable();
            $table->text('article')->nullable();
            $table->timestamps();

            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            $table->unique(['university_id', 'locale']);

            $table->index('locale');
        });

        // Перенос данных из существующей таблицы universities в новую таблицу university_translations
        $universities = DB::table('universities')->get();
        $rowsInserted = 0;

        foreach ($universities as $university) {
            DB::table('university_translations')->insert([
                'university_id' => $university->id,
                'locale' => 'cn',
                'name' => $university->name,
                'summary' => $university->summary,
                'article' => $university->article,
                'created_at' => $university->created_at,
                'updated_at' => $university->updated_at,
            ]);
            $rowsInserted++;
        }

        echo "Data transfer complete. Rows inserted: {$rowsInserted}\n";
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_translations');
    }
};
