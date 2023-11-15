<?php

use App\Models\Akun;
use App\Models\Transaksi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entris', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Transaksi::class);
            $table->foreignIdFor(Akun::class);
            $table->decimal('debit');
            $table->decimal('kredit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entris');
    }
};
