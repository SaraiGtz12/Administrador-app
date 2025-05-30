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
        Schema::create('people', function (Blueprint $table) {
            $table->id('IdPerson');
            $table->string('Name');
            $table->string('LastName');
            $table->string('SecondLastName');
            $table->unsignedBigInteger('UserId');
            $table->timestamps();
        
            $table->foreign('UserId')->references('IdUser')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
