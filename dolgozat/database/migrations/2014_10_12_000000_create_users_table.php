<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('member')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => "Kotány Vajda", 
            'email' => 'KotányVajda@gmail.com', 
            'password' => Hash::make('Aa123@'),
            'member' => 0
        ]);

        User::create([
            'name' => "Gazsi", 
            'email' => 'Gazsi@gmail.com', 
            'password' => Hash::make('aa123')
        ]);

        User::create([
            'name' => "Erzsi", 
            'email' => 'Erzsi@gmail.com', 
            'password' => Hash::make('aa123')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
