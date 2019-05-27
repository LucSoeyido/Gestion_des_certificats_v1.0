<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('categorie');
            $table->string('club');
            $table->string('assurance');
            $table->string('sang');
            $table->string('medical');
            $table->integer('tel');
            $table->integer('licence')->unique();
            $table->string('photo');
            $table->string('date_valide');
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
         Schema::dropIfExists('certifications');
    }
}
