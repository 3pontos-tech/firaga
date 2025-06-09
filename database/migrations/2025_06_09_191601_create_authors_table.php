<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table): void {
            $table->id();
            $table->string('slug');
            $table->foreignId('user_id')->constrained('users');
            $table->foreign('thumbnail_id')->references('id')->on('media');
            $table->string('name');
            $table->text('description');
            $table->string('linkedin_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
