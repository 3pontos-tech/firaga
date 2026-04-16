<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('identity_external_identity_resources', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->foreignUuid('external_identity_id')->constrained('identity_external_identities')->cascadeOnDelete();
            $table->string('capability');
            $table->string('external_resource_id');
            $table->json('external_resource_data')->nullable();
            $table->uuidMorphs('resourceable');
            $table->timestamps();

            $table->index(['external_identity_id', 'capability']);
            $table->unique(
                ['external_identity_id', 'capability', 'external_resource_id'],
                'eir_identity_capability_resource_unique'
            );
        });
    }
};
