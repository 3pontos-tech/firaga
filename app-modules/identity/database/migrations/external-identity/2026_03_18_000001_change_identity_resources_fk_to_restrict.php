<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('identity_external_identity_resources', function (Blueprint $table): void {
            $table->dropForeign(['external_identity_id']);
            $table->foreign('external_identity_id')
                ->references('id')
                ->on('identity_external_identities')
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('identity_external_identity_resources', function (Blueprint $table): void {
            $table->dropForeign(['external_identity_id']);
            $table->foreign('external_identity_id')
                ->references('id')
                ->on('identity_external_identities')
                ->cascadeOnDelete();
        });
    }
};
