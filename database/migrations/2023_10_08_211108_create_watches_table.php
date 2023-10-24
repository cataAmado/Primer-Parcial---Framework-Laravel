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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->text('description');                  
            $table->float('price', 8, 2);            
            $table->date('purchase_date');
            $table->string('color', 50);
            $table->string('brand', 50);
            $table->string('material', 50);
            $table->string('movement', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
