<?php

use App\Models\Part;
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
        Schema::create('parts', function (Blueprint $table) {
            $table->id("part_id");
            $table->string('name');
            $table->timestamps();
        });

        Part::create([
            'name' => "tükör", 
        ]);

        Part::create([
            'name' => "fék", 
        ]);

        Part::create([
            'name' => "kerék", 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
