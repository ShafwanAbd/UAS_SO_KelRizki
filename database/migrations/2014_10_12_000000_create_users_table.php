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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            
            $table->string('firstName');
            $table->string('lastName');
            $table->string('username')->unique(); 
            $table->string('noHP')->nullable();
            $table->string('email')->unique();
            $table->string('alamat')->nullable();

            $table->string('balance')->nullable();
            $table->string('balance_to_invest')->nullable();
            $table->string('profit')->nullable();
            $table->string('investing')->nullable();
            $table->string('dividen')->nullable();

            $table->string('poto_profil')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                [
                    'role' => 'admin',
                    'status' => '1',
                    'firstName' => 'ADMIN',
                    'lastName'  => 'ADMIN',
                    'username'  => 'ADMIN',
                    'balance'   => '999999',
                    'profit'    => '999999',
                    'dividen'   => '150000',
                    'email'     => 'ADMIN@gmail.com',
                    'password'  => bcrypt('ADMIN'), 
                ], 
                
                [
                    'role' => '',
                    'status' => '1',
                    'firstName' => 'Komang',
                    'lastName'  => 'Kameng',
                    'username'  => 'KomKameng',
                    'balance'   => '25000000',
                    'profit'    => '125000',
                    'dividen'   => '50000',
                    'email'     => 'komeng@gmail.com',
                    'password'  => bcrypt('komeng'), 
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
