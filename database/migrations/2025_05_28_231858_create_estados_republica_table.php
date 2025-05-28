<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estados_republica', function (Blueprint $table) {
            $table->id('idEstado');
            $table->string('nombreEstado', 50)->unique();
            $table->timestamps();
        });

        // Insertando los estados de la República Mexicana
        DB::table('estados_republica')->insert([
            ['nombreEstado' => 'Aguascalientes'],
            ['nombreEstado' => 'Baja California'],
            ['nombreEstado' => 'Baja California Sur'],
            ['nombreEstado' => 'Campeche'],
            ['nombreEstado' => 'Coahuila'],
            ['nombreEstado' => 'Colima'],
            ['nombreEstado' => 'Chiapas'],
            ['nombreEstado' => 'Chihuahua'],
            ['nombreEstado' => 'Ciudad de México'],
            ['nombreEstado' => 'Durango'],
            ['nombreEstado' => 'Guanajuato'],
            ['nombreEstado' => 'Guerrero'],
            ['nombreEstado' => 'Hidalgo'],
            ['nombreEstado' => 'Jalisco'],
            ['nombreEstado' => 'México'],
            ['nombreEstado' => 'Michoacán'],
            ['nombreEstado' => 'Morelos'],
            ['nombreEstado' => 'Nayarit'],
            ['nombreEstado' => 'Nuevo León'],
            ['nombreEstado' => 'Oaxaca'],
            ['nombreEstado' => 'Puebla'],
            ['nombreEstado' => 'Querétaro'],
            ['nombreEstado' => 'Quintana Roo'],
            ['nombreEstado' => 'San Luis Potosí'],
            ['nombreEstado' => 'Sinaloa'],
            ['nombreEstado' => 'Sonora'],
            ['nombreEstado' => 'Tabasco'],
            ['nombreEstado' => 'Tamaulipas'],
            ['nombreEstado' => 'Tlaxcala'],
            ['nombreEstado' => 'Veracruz'],
            ['nombreEstado' => 'Yucatán'],
            ['nombreEstado' => 'Zacatecas'],
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_republica');
    }
};
