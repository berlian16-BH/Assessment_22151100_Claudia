<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('databarangs'); // Hapus tabel jika sudah ada sebelumnya
        Schema::create('databarangs', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang');
            $table->string('Satuan');
            $table->integer('HargaSatuan');
            $table->integer('Stok');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databarangs');
    }
};
