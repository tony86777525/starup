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
        Schema::create('ip_ieit_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->nullable();
            $table->date('art_date')->nullable();
            $table->text('tag')->nullable();
            $table->text('content')->nullable();
            $table->string('pic', 300)->nullable();
            $table->tinyInteger('enabled');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ip_ieit_stories');
    }
};
