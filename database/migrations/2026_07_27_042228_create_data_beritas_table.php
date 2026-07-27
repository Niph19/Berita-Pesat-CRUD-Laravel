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
        Schema::create('data_beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judulBerita');
            $table->string('gambarBerita');
            $table->text('isiBerita');
            $table->string('author');
            $table->date('tanggalTerbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_beritas');
    }
};
