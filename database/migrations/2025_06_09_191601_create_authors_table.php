<?php

declare(strict_types=1);

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
            $table->foreignUuid('user_id')->constrained('identity_users');
            $table->string('name');
            $table->string('role')->nullable();
            $table->text('description');
            $table->string('linkedin_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
