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
            $table->string('resourceable_type')->nullable()->change();
            $table->uuid('resourceable_id')->nullable()->change();
        });
    }
};
