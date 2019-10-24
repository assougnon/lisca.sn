<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProtocoleHospitalLieuToMalades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('malades', function (Blueprint $table) {
            $table->string('hopitalSuivi')->nullable()->after('lieuSuivi');
            $table->string('protocole')->after('numeroSuivi');
            $table->string('lieu_de_Provenance')->after('protocole');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('malades', function (Blueprint $table) {

        });
    }
}
