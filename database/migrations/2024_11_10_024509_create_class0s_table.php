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
        Schema::create('class0s', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->integer('grade');
            $table->integer('class');
            $table->integer('numbers');
            $table->string('name');
            $table->string('sex');
            $table->integer('atitude');
            $table->integer('ability');
            $table->integer('friendship');
            $table->integer('conditions')->nullable();
            $table->integer('total');
            $table->integer('next_class');
            $table->string('name_split');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class0s');
    }
};
