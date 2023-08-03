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
        Schema::create('office_settings', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('office_english_name')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_english_address')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_cover_photo')->nullable();
            $table->string('office_logo')->nullable();
            $table->string('flag')->nullable();
            $table->string('office_ad_photo')->nullable();
            $table->foreignId('office_chief_id')->nullable()->constrained('employees')->nullOnDelete();
            $table->foreignId('information_officer_id')->nullable()->constrained('employees')->nullOnDelete();
            $table->string('map_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_settings');
    }
};
