<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Recipe\RecipeDiet;
use App\Enums\Recipe\RecipeTime;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description', 1500);
            $table->text('instruction', 3000);
            $table->enum('diet', RecipeDiet::TYPES)->nullable();
            $table->enum('time', RecipeDiet::TYPES)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};