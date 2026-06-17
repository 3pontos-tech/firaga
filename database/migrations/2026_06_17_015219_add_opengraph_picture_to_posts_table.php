<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table): void {
            $table->unsignedBigInteger('opengraph_picture')->nullable();
            $table->foreign('opengraph_picture')
                ->references('id')
                ->on('media');
            $table->longText('opengraph_picture_alt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table): void {
            $table->dropForeign(['opengraph_picture']);
            $table->dropColumn(['opengraph_picture', 'opengraph_picture_alt']);
        });
    }
};
