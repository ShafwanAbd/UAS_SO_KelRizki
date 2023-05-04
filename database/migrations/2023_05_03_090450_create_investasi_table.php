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
        Schema::create('investasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('durasi');
            $table->string('period');
            $table->string('kategori');
            $table->string('jenis');
            $table->string('interest');
            $table->string('harga');
            $table->string('lembar');
            $table->string('lembar_terjual')->nullable();
            $table->string('start_date'); 
            $table->string('expiring_date'); 
            $table->string('location');
            $table->string('status');
            $table->string('asuransi');
            $table->string('referral_percent');
            $table->string('poto');
            $table->string('keterangan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investasi');
    }
};
