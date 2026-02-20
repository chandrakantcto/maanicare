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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->default(0)->index();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('hero_image')->nullable();
            $table->text('short_description')->nullable();
            $table->string('vision_heading')->nullable();
            $table->longText('vision_intro_paragraph')->nullable();
            $table->json('vision_bullets')->nullable();
            $table->longText('vision_transition_text')->nullable();
            $table->string('vision_closing_line')->nullable();
            $table->string('client_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_location')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
