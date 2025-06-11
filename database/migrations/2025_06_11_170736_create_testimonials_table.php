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
        Schema::create('testimonials', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('rating');
            $table->longText('comment');
            $table->timestamp('posted_at');
            $table->string('testimonial_url');
            $table->timestamps();
        });
    }
};
