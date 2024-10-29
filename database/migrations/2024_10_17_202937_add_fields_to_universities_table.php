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
        Schema::table('universities', function (Blueprint $table) {
            $table->string('abbreviation', 50)->nullable()->after('id');
            $table->string('picture_path')->nullable()->nullable()->after('logo_path');
            $table->boolean('hidden')->default(true)->after('country_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universities', function (Blueprint $table) {
            $table->dropColumn('abbreviation');
            $table->dropColumn('picture_path');
            $table->dropColumn('hidden');
        });
    }
};
