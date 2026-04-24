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
        Schema::create('filters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('name_es')->unique();
            $table->decimal('price')->index();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('filters');
    }
};
