<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->longText('answer');
            $table->longText('english_question');
            $table->longText('english_answer');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
