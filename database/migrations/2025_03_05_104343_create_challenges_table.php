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

            // Informations sur le challenge
            $table->string('nomchallenge');
            $table->string('image')->nullable();
            $table->string('type');
            $table->string('secteurs');
            $table->text('description')->nullable();
            $table->string('fichier')->nullable();
            $table->string('critere');
            $table->string('conditions')->nullable();
            $table->text('dotation');

            // Géolocalisation du challenge
            $table->string('payschallenge');
            $table->string('villechallenge');
            $table->string('campus');
            $table->date('datelancement');
            $table->date('datecloture');

            // Statut du challenge (pour la gestion)
            $table->enum('statut', ['en_attente', 'publie', 'termine', 'annule'])->default('en_attente');
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
