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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->length('70');
            $table->string('short_description')->length('150');
            $table->string('image');
            $table->text('long_description')->length('500')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('client')->length('70')->nullable();
            $table->string('industry')->length('70')->nullable();
            $table->string('services')->length('70')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('website')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
