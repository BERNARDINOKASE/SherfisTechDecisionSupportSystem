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
        Schema::table('sub_kriterias', function (Blueprint $table) {
            $table->string('id_kriteria')->after('id');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriterias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sub_kriterias', function (Blueprint $table) {
            $table->dropForeign('id_kriteria');
            $table->dropColumn('id_kriteria');
        });
    }
};
