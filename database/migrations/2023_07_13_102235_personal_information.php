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
        Schema::create('personalInformation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Student_Id')->unique();
            $table->string('School');
            $table->string('Program');
            $table->string('Major');
            $table->string('Campus');
            $table->string('Student_Academic_Session');
            $table->string('Year_Of_Program');
            $table->string('Registration_Status');
            $table->string('Student_Sponser');
            $table->string('Outstanding_Balanace');
            $table->string('Remark');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personalInformation');
        //
    }
};
