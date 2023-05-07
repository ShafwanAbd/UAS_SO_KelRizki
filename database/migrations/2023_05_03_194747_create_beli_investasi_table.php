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
        Schema::create('beli_investasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('id_investasi');
            $table->string('amount');
            $table->string('lembar');
            $table->string('pembayaran_from');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beli_investasi');
    }
};
