<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();

            // Informations personnelles contact
            $table->string('nom');
            $table->string('email');
            $table->string('numero');

            // Localisation
            $table->string('pays');
            $table->string('region');
            $table->string('ville');
            $table->string('codepostal');
            $table->string('adresse');

            // Informations complémentaires (si entreprise)
            $table->string('nomcommercial')->nullable();
            $table->string('numeroentreprise')->nullable();
            $table->string('numeroagreation')->nullable();
            $table->json('typesactivite')->nullable(); // Pour stocker plusieurs types d'activités
            $table->date('datedebutactivite')->nullable();

            // Informations sur le challenge
            $table->string('nomchallenge');
            $table->string('image')->nullable();
            $table->string('type');
            $table->string('secteurs');
            $table->text('description')->nullable();
            $table->string('fichier')->nullable();
            $table->string('critere')->nullable();
            $table->string('conditions')->nullable();
            $table->text('dotation');

            // Identification de la problématique à solutionner
            $table->json('risques')->nullable(); // Pour stocker les risques sélectionnés

            // Compétences attendues
            $table->json('competences_attendues')->nullable(); // Pour stocker les compétences attendues

            // Calendrier des sélections
            $table->date('datedebutinscription');
            $table->date('datefininscription');
            $table->date('datedebutselection');
            $table->date('datefinselection');

            // Équipe
            $table->string('compositionequipes')->nullable();
            $table->integer('nombreequipesmin')->nullable();
            $table->integer('nombreequipesmax')->nullable();
            $table->string('criteresparticipation')->nullable();

            // Géolocalisation du challenge
            $table->string('payschallenge');
            $table->string('villechallenge');
            $table->string('campus');
            $table->date('datelancement');
            $table->date('datecloture');

            // Statut du challenge (pour la gestion)
            $table->enum('statut', ['en_attente', 'publie', 'termine', 'annule'])->default('en_attente');

            // Relations
            $table->foreignId('campus_angel_id')->nullable()->constrained();
            $table->foreignId('city_angel_id')->nullable()->constrained();
            $table->foreignId('business_id')->nullable()->constrained();
            $table->foreignId('social_id')->nullable()->constrained();
            $table->foreignId('territory_id')->nullable()->constrained();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};
