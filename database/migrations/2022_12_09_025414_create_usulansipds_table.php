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
        Schema::create('usulansipds', function (Blueprint $table) {
            $table->id();
            $table->string('No');
            $table->date('Tgl_Usul');
            $table->date('Tgl_Pengajuan');
            $table->string('Pengusul');
            $table->string('Profil');
            $table->text('Permasalahan');
            $table->text('Usulan');
            $table->string('Urusan');
            $table->text('Alamat');
            $table->string('SKPD_Tujuan_Awal');
            $table->string('SKPD_Tujuan_Akhir');
            $table->text('Rekomendasi_Bappeda_Mitra_OPD');
            $table->string('Kategori_Usulan');
            $table->string('Koefisien');
            $table->text('Rekomendasi_Kelurahan_Desa');
            $table->text('Rekomendasi_Kecamatan');
            $table->text('Rekomendasi_SKPD');
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
        Schema::dropIfExists('usulansipds');
    }
};
