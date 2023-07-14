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
        Schema::create('registration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Student_Id')->unique();
            $table->string('Student_Name');
            $table->string('Student_nrc');
            $table->string('Gender');
            $table->string('Category');
            $table->string('SubCategory');
            $table->string('Program');
            $table->string('Major');
            $table->string('Intake');
            $table->string('Current');
            $table->string('Period');
            $table->string('StudyYear');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
