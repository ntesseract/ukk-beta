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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nis')->unique();
            $table->string('nama');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->date('tanggal');
            $table->string('foto')->default('noimage.png');
            $table->timestamps();
            // FOREIGN KEY DI SINI
            // $table->foreign('nis')
            //     ->references('nis')->on('siswas')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade')
            // ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
