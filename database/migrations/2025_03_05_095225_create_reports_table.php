<?php

use App\Models\Business;
use App\Models\CampusAngel;
use App\Models\CityAngel;
use App\Models\Social;
use App\Models\Territory;
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
    Schema::create('reports', function (Blueprint $table) {
        $table->id();
        $table->string('categorie');
        $table->string('title');
        $table->text('description');
        $table->string('photo')->nullable(); // Stockera le chemin des fichiers (images)
        $table->string('video')->nullable(); // Stockera le chemin des fichiers (vidéos)
        $table->double('latitude');
        $table->double('longitude');
        $table->foreignIdFor(CampusAngel::class)->constrained()->nullable();
        $table->foreignIdFor(CityAngel::class)->constrained()->nullable();
        $table->foreignIdFor(Business::class)->constrained()->nullable();
        $table->foreignIdFor(Social::class)->constrained()->nullable();
        $table->foreignIdFor(Territory::class)->constrained()->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
