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
        Schema::create('centre_recyclages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nom
            $table->string('address'); // adresse
            $table->string('material_type'); // type_materiaux
            $table->integer('capacity'); // capacité
            $table->integer('number_of_employees'); // nombre d'employés
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centre_recyclages');
    }
};