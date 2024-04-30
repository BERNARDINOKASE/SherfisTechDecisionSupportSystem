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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('id_alternatif');
            $table->string('id_kriteria');
            $table->foreignId('id_subkriteria');
            $table->foreign('id_kriteria')->references('id_kriteria')->on('kriterias');
            $table->foreign('id_alternatif')->references('id_alternatif')->on('alternatifs');
            $table->foreign('id_subkriteria')->references('id')->on('sub_kriterias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais', function (Blueprint $table) {
            $table->dropForeign('id_alternatif');
            $table->dropForeign('id_kriteria');
            $table->dropForeign('id_subkriteria');
            $table->dropColumn('id_alternatif');
            $table->dropColumn('id_kriteria');
            $table->dropColumn('id_subkriteria');
        });
    }
};
