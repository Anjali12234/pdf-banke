<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('document_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('english_title')->nullable();
            $table->string('slug');
            $table->foreignId('document_category_id')->nullable()->constrained('document_categories')->nullOnDelete();
            $table->string('publisher');
            $table->string('english_publisher')->nullable();
            $table->string('publish_date'); 
            $table->boolean('status')->default(true);   
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('document_lists');
    }
};
