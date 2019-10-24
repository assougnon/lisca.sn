<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("idMedicament");
            $table->string("nomMedicament");
            $table->string("formeGalinique")->nullable();
            $table->string('dosageMedicament');
            $table->integer('prixMedicament')->default('0');
            $table->string('quantiteStockMed');
            $table->string('seuilMinMed');
            $table->string('conditionnement');
            $table->string('provenanceMed');
            $table->string('imageMedicament')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicaments');
    }
}
