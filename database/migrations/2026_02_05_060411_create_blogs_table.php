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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author_id')->default(0)->index();     // author
            $table->bigInteger('parent_id')->default(0)->index();
            $table->bigInteger('category_id')->default(0)->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('thumbnail')->nullable();
            $table->string('featured_image')->nullable();
            $table->timestamp('published_at')->nullable()->index();   // scheduling
            $table->tinyInteger('featured')->default(0)->index();     // homepage/featured section
            $table->integer('reading_time_minutes')->nullable();
            $table->unsignedBigInteger('views_count')->default(0);
            // JSON fields (flexible)
            $table->json('meta')->nullable();
            $table->json('tags')->nullable();
            // SEO 
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->json('open_graph')->nullable();
            $table->enum('status', ['Active', 'InActive'])->default('Active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
