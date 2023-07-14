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
        Schema::create('examResults', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Programme');
            $table->string('Year_Of_Study');
            $table->string('Course');
            $table->string('Grade');
            $table->string('Comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examResults');
    }
};
