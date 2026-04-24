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
        Schema::create('frames', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('name_es')->unique();
            $table->foreignId('material_id')->nullable()->cascadeOnUpdate()->noActionOnDelete();
            $table->foreignId('brand_id')->nullable()->cascadeOnUpdate()->noActionOnDelete();
            $table->foreignId('shape_id')->nullable()->cascadeOnUpdate()->noActionOnDelete();
            $table->decimal('price')->index();
            $table->string('image')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('slug_es')->nullable()->unique();
            $table->mediumText('text')->nullable();
            $table->mediumText('text_es')->nullable();
            $table->boolean('visible')->default(1)->index();
            $table->boolean('active')->default(1)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frames');
    }
};
