<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->foreignId('department_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('designation_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('position');
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
