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
            if (!Schema::hasColumn('posts', 'opengraph_picture')) {
                $table->unsignedBigInteger('opengraph_picture')->nullable();
                $table->foreign('opengraph_picture')
                    ->references('id')
                    ->on('media');
            }

            if (!Schema::hasColumn('posts', 'opengraph_picture_alt')) {
                $table->longText('opengraph_picture_alt')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table): void {
            if (Schema::hasColumn('posts', 'opengraph_picture')) {
                $table->dropForeign(['opengraph_picture']);
                $table->dropColumn('opengraph_picture');
            }

            if (Schema::hasColumn('posts', 'opengraph_picture_alt')) {
                $table->dropColumn('opengraph_picture_alt');
            }
        });
    }
};
