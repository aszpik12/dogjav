<?php

use App\Models\Winning;
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
        Schema::create('winnings', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('brand_id')->references('brand_id')->on('brands');
            $table->foreignId('part_id')->references('part_id')->on('parts');
            $table->foreignId('product_id')->references('product_id')->on('products');
            $table->date('date');
            $table->timestamps();
        });
        
        Winning::create([
            'user_id' => 3, 
            'brand_id' => 1,
            'part_id' => 3,
            'product_id' => 2,
            'date' => 20230103,
        ]);

        Winning::create([
            'user_id' => 1, 
            'brand_id' => 3,
            'part_id' => 2,
            'product_id' => 3,
            'date' => 20231207,
        ]);

        Winning::create([
            'user_id' => 2, 
            'brand_id' => 3,
            'part_id' => 3,
            'product_id' => 1,
            'date' => 20230510,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('winnings');
    }
};
