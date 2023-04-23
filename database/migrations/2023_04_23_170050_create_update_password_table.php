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
        Schema::create('update_password', function (Blueprint $table) {
            $table->id(); 
            $table->string('id_user'); 
            $table->string('current_pw');
            $table->string('new_pw');
            $table->string('new_pw_confirm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_password');
    }
};
