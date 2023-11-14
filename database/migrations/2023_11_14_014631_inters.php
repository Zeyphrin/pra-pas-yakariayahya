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
        Schema::create('inter', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nilai_aset');
            $table->string('pencipta');
            $table->string('bidang');
            $table->string('tgl_berdiri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
