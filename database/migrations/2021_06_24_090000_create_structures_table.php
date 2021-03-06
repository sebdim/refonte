<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('personnes');
            $table->string('nom');
            $table->string('sigle');
            $table->string('domaine');
            $table->string('localite');
            $table->string('prefecture');
            $table->string('region');
            $table->string('type_structure');
            $table->string('evaluation');
            $table->string('convention');
            $table->string('reference_convention')->nullable();
            $table->string('statut_juridique');
            $table->string('guide');
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
        Schema::dropIfExists('structures');
    }
}
