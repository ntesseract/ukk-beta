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
        Schema::create('gurus', function (Blueprint $table) {
            $table->unsignedBigInteger('nis')->primary();
            $table->integer('nip')->unique();
            $table->string('namaguru');
            $table->enum('jeniskelamin', ['L', 'P']);
            $table->string('kontak');
            $table->string('foto')->default('noimage.png');
            $table->timestamps();
            
            $table->foreign('nis')->references('nis')->on('siswas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
