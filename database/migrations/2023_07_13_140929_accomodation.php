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
        Schema::create('accomodation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Student_Id')->unique();
            $table->string('Hostel');
            $table->string('Block');
            $table->string('Level');
            $table->string('Room_Type');
            $table->string('Room_Number');
            $table->string('Remark');
            $table->string('Key');
            $table->string('Key_Number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodation');

    }
};
