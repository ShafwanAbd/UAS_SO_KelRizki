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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                [
                    'role' => '1',
                    'status' => '1',
                    'firstName' => 'ADMIN',
                    'lastName'  => 'ADMIN',
                    'username'  => 'ADMIN',
                    'email'     => 'ADMIN@gmail.com',
                    'password'  => bcrypt('ADMIN'), 
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
