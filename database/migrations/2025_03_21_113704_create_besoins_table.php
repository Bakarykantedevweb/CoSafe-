<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('besoins', function (Blueprint $table) {
            $table->id();
            $table->string('nom_besoin');
            $table->text('description');
            $table->json('fichiers')->nullable();
            $table->json('categories');
            $table->string('geolocalisation')->nullable();
            $table->dateTime('date_heure')->nullable();
            $table->string('budget');
            $table->json('destinataires');
            $table->json('partage_reseaux')->nullable();
            $table->boolean('partage_autorites');
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
        Schema::dropIfExists('besoins');
    }
};
