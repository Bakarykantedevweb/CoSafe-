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

           // Informations du promoteur
           $table->string('nom');
           $table->string('email');
           $table->string('numero', 20);
           
           // Localisation du promoteur
           $table->string('pays');
           $table->string('region');
           $table->string('ville');
           $table->string('codepostal', 20);
           $table->string('adresse');
           
           // Informations entreprise (optionnelles)
           $table->string('nomcommercial')->nullable();
           $table->string('numeroentreprise', 50)->nullable();
           $table->string('numeroagreation', 50)->nullable();
           $table->json('typesactivite')->nullable();
           $table->date('datedebutactivite')->nullable();
           
           // Informations du challenge
           $table->string('nomchallenge');
           $table->string('image');
           $table->string('type');
           $table->string('secteurs');
           $table->text('description')->nullable();
           $table->string('fichier');
           $table->text('dotation')->nullable();
           
           // Récompense
           $table->string('reward_value');
           $table->json('reward_type')->nullable();
           $table->text('reward_description')->nullable();
           
           // Association soutenue
           $table->string('association_name')->nullable();
           $table->string('association_cause')->nullable();
           $table->string('association_phone', 20)->nullable();
           $table->string('association_email')->nullable();
           $table->string('association_website')->nullable();
           $table->string('association_file')->nullable();
           $table->string('association_country')->nullable();
           $table->string('association_city')->nullable();
           
           // Problématiques et compétences
           $table->json('risques')->nullable();
           $table->json('competences_attendues')->nullable();
           
           // Calendrier
           $table->date('start_date');
           $table->date('end_date');
           $table->date('datedebutinscription');
           $table->date('datefininscription');
           $table->date('datedebutselection');
           $table->date('datefinselection');
           
           // Équipe
           $table->string('compositionequipes');
           $table->integer('nombreequipesmin');
           $table->integer('nombreequipesmax');
           $table->string('criteresparticipation');
           
           // Géolocalisation du challenge
           $table->string('payschallenge');
           $table->string('villechallenge');
           $table->string('campus');

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
