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
        Schema::create('financial_account', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_akun');
            $table->string('no_akun');
            $table->string('nama_pemilik');
            $table->date('tgl_pembuatan');
            $table->string('jenis_akun');
            $table->boolean('status_akun');
            $table->decimal('saldo', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_account');
    }
};
