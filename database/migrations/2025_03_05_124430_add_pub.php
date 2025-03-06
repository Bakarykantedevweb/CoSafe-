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
        //
    Schema::create('campaigns', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->date('start_date');
        $table->date('end_date');
        $table->enum('status', ['active', 'inactive']);
        $table->timestamps();
    });

    // Migration pour les publicités
    Schema::create('ads', function (Blueprint $table) {
        $table->id();
        $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->string('image_url');
        $table->timestamps();
    });

    // Migration pour les impressions
    Schema::create('impressions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ad_id')->constrained()->onDelete('cascade');
        $table->timestamp('viewed_at');
        $table->timestamps();
    });

    // Migration pour les clics
    Schema::create('clicks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ad_id')->constrained()->onDelete('cascade');
        $table->timestamp('clicked_at');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
