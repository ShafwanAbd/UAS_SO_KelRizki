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
        Schema::create('admin_bank', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bankName');
            $table->string('address');
            $table->string('swift')->nullable();
            $table->string('iban');
            $table->string('acct_no');
            $table->string('status'); 
            $table->timestamps();
        });

        DB::table('admin_bank')->insert(
            array(
            ['name'     => 'TERNAKCONNECT',
            'bankName'  => 'BANK PERMATA',
            'address'   => 'INDONESIA',
            'swift'     => '',
            'iban'      => '12345',
            'acct_no'   => '1234567890',
            'status'    => '1'],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_bank');
    }
};
