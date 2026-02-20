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
        Schema::create('case_study_sections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('case_study_id')->default(0)->index();
            $table->string('section_key')->nullable();
            $table->string('title')->nullable();
            $table->integer('order')->default(0);
            $table->longText('content')->nullable();
            $table->boolean('show_title')->default(true);
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_study_sections');
    }
};
