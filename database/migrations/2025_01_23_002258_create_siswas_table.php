<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->unsignedBigInteger('nis')->primary();
            $table->string('namasiswa');
            $table->text('alamat');
            $table->enum('jeniskelamin', ['L', 'P']);
            $table->string('kelas');
            $table->date('ttl');
            $table->string('foto')->default('noimage.png');
            $table->timestamps();
            
            $table->foreign('nis')
                ->references('nis')->on('products')
                ->onDelete('cascade')
                ->onUpdate('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};