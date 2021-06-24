<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('structure_id')->nullable();
            $table->foreign('structure_id')->references('id')->on('structures');
            $table->string('nom');
            $table->string('prenoms');
            $table->date('date_de_naissance');
            $table->enum('sexe', ['Masculin', 'Feminin']);
            $table->enum('handicap', ['oui', 'non']);
            $table->string('lieu_de_residence');
            $table->integer('contacts');
            $table->string('email');
            $table->string('niveau_etude');
            $table->string('diplome');
            $table->string('domaine_diplome');
            $table->string('domaine_affectation');
            $table->float('moyenne');
            $table->string('jury');
            $table->string('decision_jury');
            $table->date('date_entretien');
            $table->enum('formation', ['oui', 'non']);
            $table->date('date_formation')->nullable();
            $table->string('statut');
            $table->string('ancienne_structure')->nullable();
            $table->string('raison')->nullable();
            $table->string('decision')->nullable();
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
        Schema::dropIfExists('candidats');
    }
}
