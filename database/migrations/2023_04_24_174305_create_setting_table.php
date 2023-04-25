<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('admin_fee');
            $table->string('charge');
            $table->string('limit_first')->nullable();
            $table->string('limit_last')->nullable(); 
            $table->string('day_estimation')->nullable(); 
            $table->timestamps();
        });

        DB::table('setting')->insert(
            array(
                [
                    'admin_fee' => '1250',
                    'charge' => '0.25',
                    'limit_first' => '10000',
                    'limit_last' => '1000000000',
                    'day_estimation' => '1',
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
