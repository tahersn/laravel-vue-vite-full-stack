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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('time');
            $table->string('handle');
            $table->string('image');
            $table->string('tweet');
            $table->string('file')->nullable();
            $table->boolean('is_video')->nullable();
            $table->integer('comments');
            $table->integer('retweets');
            $table->integer('likes');
            $table->integer('analytics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
