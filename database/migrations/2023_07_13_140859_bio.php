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
        Schema::create('bio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Student_Id')->unique();
            $table->string('First_Name');
            $table->string('Middle_Name');
            $table->string('Surname');
            $table->string('Gender');
            $table->date('Date_Of_Birth');
            $table->string('Nrc');
            $table->string('Passprort');
            $table->string('Phone_Number');
            $table->string('Residential_Address');
            $table->string('Postal_Address');
            $table->string('Nationality');
            $table->string('Marital_Status');
            $table->string('Disability');
            $table->string('Next_Of_Kin');
            $table->string('Title');
            $table->string('Province');
            $table->string('Secondary_School');
            $table->string('Refugee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio');
    }
};
