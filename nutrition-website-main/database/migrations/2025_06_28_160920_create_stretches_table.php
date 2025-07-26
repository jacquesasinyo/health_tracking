<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stretches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('muscle_group');
            $table->string('image')->nullable();
            $table->string('duration')->default('30 seconds');
            $table->string('difficulty')->default('beginner');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stretches');
    }
};
