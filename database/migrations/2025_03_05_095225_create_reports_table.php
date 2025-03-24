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
        $table->text('description');
        $table->string('photo')->nullable();
        $table->string('video')->nullable();
        $table->double('latitude');
        $table->double('longitude');
        $table->json('destinataires');
        $table->json('partage_reseaux')->nullable();
        $table->json('categories');
        $table->dateTime('date_heure')->nullable();

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
        Schema::dropIfExists('reports');
    }
};
