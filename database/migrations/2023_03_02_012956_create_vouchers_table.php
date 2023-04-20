<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->longText('nama_voucher');
            $table->longText('deskripsi');
            $table->string('kode');
            $table->string('gambar')->nullable();
            $table->string('toko');
            $table->string('kategori');
            $table->integer('views')->default(0);
            $table->longText('keterangan')->nullable();
            $table->date('masa_kadaluarsa');
            $table->enum('status',['Dikonfirmasi','Ditolak','Menunggu'])->default('Menunggu');
            $table->integer('kuota')->default(0);
            $table->integer('terlaris')->default(0);
            $table->longText('link');
            $table->integer('diskon');
            $table->string('syarat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
};
