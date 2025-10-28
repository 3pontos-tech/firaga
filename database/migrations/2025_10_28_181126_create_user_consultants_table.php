<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use TresPontosTech\Consultant\Core\Models\Consultant;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_consultants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Consultant::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_consultants');
    }
};
