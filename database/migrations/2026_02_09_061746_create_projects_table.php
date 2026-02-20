<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->default(0)->index();
            $table->string('title');                        
            $table->string('slug')->unique();              
            $table->text('description')->nullable();        
            $table->string('sector')->nullable();           
            $table->string('location')->nullable();         
            $table->integer('area_sqft')->nullable();      
            $table->string('area_display')->nullable();     
            $table->text('special_features')->nullable();  
            $table->text('key_highlights')->nullable();    
            $table->json('services')->nullable(); 
            $table->string('hero_image')->nullable(); 
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->enum('status', ['Active', 'InActive'])->default('Active');
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
