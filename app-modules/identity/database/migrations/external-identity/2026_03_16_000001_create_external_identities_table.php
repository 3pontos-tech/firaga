<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('identity_external_identities', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->foreignUuid('team_id')->constrained('identity_teams');
            $table->string('type');
            $table->string('provider');
            $table->string('credentials_type');
            $table->text('credentials');
            $table->string('external_account_id')->nullable();
            $table->foreignUuid('connected_by')->nullable()->constrained('identity_users');
            $table->timestamp('connected_at')->nullable();
            $table->timestamp('disconnected_at')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['team_id', 'provider']);
        });
    }
};
