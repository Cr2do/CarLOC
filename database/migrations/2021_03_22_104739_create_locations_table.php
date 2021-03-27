<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table qui contiendra nos informations sur les voitures loue et les utilisateurs qui l'ont loue
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('voiture_id')->constrained()->cascadeOnDelete();
            $table->enum('statut',[
                'traitement',
                'accepted',
                'rejeted'
            ])->default('traitement');
            $table->dateTime('date_start');//Date ou il a loue
            $table->dateTime('date_end'); // Date ou il a retourne
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
