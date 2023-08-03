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
        Schema::create('office_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('english_title');
            $table->string('position');
            $table->string('font_color');
            $table->string('font_size');
            $table->string('font_family');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_headers');
    }
};
