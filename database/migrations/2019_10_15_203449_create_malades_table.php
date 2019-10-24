<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaladesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('lieuSuivi');
            $table->string('numeroSuivi')->nullable();
            $table->string('numTel')->nullable();
            $table->string('numTel1')->nullable();
            $table->string('age');
            $table->string('sexe',10);
            $table->string('ethnie',150)->nullable();
            $table->string('religion',25);
            $table->string('nationalite',70);
            $table->string('profession',150)->nullable()->default('NC');
            $table->string('niveauIntelec',150)->nullable()->default('NC');
            $table->string('ninp',70);
            $table->string('adresse');
            $table->string('pccb1')->nullable()->default('AUCUN');
            $table->string('pccb2')->nullable()->default('AUCUN');
            $table->string('habitat')->nullable();
            $table->string('statuthabitat');
            $table->date('datenaiss');
            $table->string('statutMalade',40);
            $table->string('enquete',3)->nullable()->default('NO');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('malades');
    }
}
