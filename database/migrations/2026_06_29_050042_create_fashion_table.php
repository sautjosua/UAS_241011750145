<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fashion', function (Blueprint $table) {
            $table->id('id_fashion');
            $table->string('gambar')->nullable();
            $table->string('nama_item');
            $table->string('ukuran');
            $table->string('warna');
            $table->string('brand');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion');
    }
};