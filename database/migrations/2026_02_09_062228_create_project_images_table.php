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
        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->default(0)->index();
            $table->string('image_path');           // storage path: projects/abc123.jpg
            $table->string('caption')->nullable();  // optional alt text / caption
            $table->integer('sort_order')->default(0);
            $table->boolean('is_hero')->default(false);
            $table->enum('status', ['Active', 'InActive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_images');
    }
};
