<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->string('penulis', 100);
            $table->string('penerbit', 100);
            $table->year('tahun_terbit');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
