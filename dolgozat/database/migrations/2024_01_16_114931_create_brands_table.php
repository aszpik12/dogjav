<?php

use App\Models\Brand;
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
        Schema::create('brands', function (Blueprint $table) {
            $table->id("brand_id");
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });

        Brand::create([
            'name' => "IKA", 
            'country' => "Svéd", 
        ]);

        Brand::create([
            'name' => "Shaize", 
            'country' => "Német", 
        ]);

        Brand::create([
            'name' => "Alah", 
            'country' => "Arab", 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
