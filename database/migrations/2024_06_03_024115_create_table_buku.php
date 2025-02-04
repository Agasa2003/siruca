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
        Schema::create('table_buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('judul_buku', 40);
            $table->string('deskripsi', 100);
            $table->integer('kategori');
            $table->string('cover_img', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_buku');
    }
};
