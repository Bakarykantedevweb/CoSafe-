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
        $table->string('titre');
        $table->string('categorie');
        $table->text('description');
        $table->dateTime('start_date');
        $table->dateTime('end_date');
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
