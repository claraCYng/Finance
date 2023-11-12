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
        Schema::create('dataProduction', function (Blueprint $table) {
            $table->id();
        $table->timestamps();
        $table->string('nama_item');
        $table->string('jumlah_item');
        $table->string('harga_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataProduction');
    }
};
