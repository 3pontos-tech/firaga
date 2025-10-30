<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $connection = (string) config('filament-consultants-module.consultants.connection');

        if (! Schema::connection($connection)->hasTable('consultants')) {
            Schema::connection($connection)->create(config('filament-consultants-module.consultants.database.table.consultants', 'consultants'), function (Blueprint $table): void {
                $table->id();
                $table->string('provider')->comment('CRM provider');
                $table->string('provider_id')->nullable()->comment('CRM user identifier');
                $table->boolean('enabled');
                $table->string('name');
                $table->string('slug');
                $table->string('phone');
                $table->string('email');
                $table->string('short_description');
                $table->text('biography');
                $table->text('readme')->comment('More like a "How to work with me" section');

                $table->jsonb('socials_urls')->default('[]');

                $table->softDeletes();
                $table->timestamps();
            });
        }

    }
};
