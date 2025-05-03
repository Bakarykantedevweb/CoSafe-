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
            $table->string('image'); // chemin vers le fichier image
            $table->string('type')->nullable(); // si applicable
            $table->string('secteurs')->nullable(); // si applicable
            $table->text('description')->nullable();
            $table->string('fichier')->nullable(); // chemin vers un fichier joint
            $table->text('dotation')->nullable();

            // Récompense
            $table->decimal('reward_value', 10, 2)->nullable(); // montant ou valeur
            $table->json('reward_type')->nullable(); // ex: ["cash_prize", "internship_job"]
            $table->text('reward_description')->nullable();

            // Association soutenue (optionnel)
            $table->string('association_name')->nullable();
            $table->string('association_cause')->nullable();
            $table->string('association_phone', 20)->nullable();
            $table->string('association_email')->nullable();
            $table->string('association_website')->nullable();
            $table->string('association_file')->nullable(); // chemin vers logo/presentation
            $table->string('association_country')->nullable();
            $table->string('association_city')->nullable();

            // Problématiques et compétences
            $table->json('risques')->nullable();
            $table->json('competences_attendues')->nullable();

            // Calendrier
            $table->date('start_date');
            $table->date('end_date');
            $table->date('datedebutinscription')->nullable();
            $table->date('datefininscription')->nullable();
            $table->date('datedebutselection')->nullable();
            $table->date('datefinselection')->nullable();

            // Équipe
            $table->string('compositionequipes')->nullable();
            $table->integer('nombreequipesmin')->nullable();
            $table->integer('nombreequipesmax')->nullable();
            $table->string('criteresparticipation')->nullable();

            // Géolocalisation du challenge
            $table->string('payschallenge')->nullable();
            $table->string('villechallenge')->nullable();
            $table->string('campus')->nullable();

            // Statut du challenge
            $table->enum('statut', ['en_attente', 'publie', 'termine', 'annule'])->default('en_attente');

            // Clés étrangères
            $table->foreignId('campus_angel_id')->nullable()->constrained('campus_angels');
            $table->foreignId('city_angel_id')->nullable()->constrained('city_angels');
            $table->foreignId('business_id')->nullable()->constrained('businesses');
            $table->foreignId('social_id')->nullable()->constrained('socials');
            $table->foreignId('territory_id')->nullable()->constrained('territories');

            $table->timestamps();
            $table->softDeletes(); // si tu veux activer les suppressions logiques
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
