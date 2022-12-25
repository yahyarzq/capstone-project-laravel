<?php

use App\Models\Desa;
use App\Models\Kecamatan;
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
        Schema::create('usulans', function (Blueprint $table) {
            $table->id();
            $table->string('No');
            $table->date('Tgl_Usul');
            $table->string('Pengusul');
            $table->string('Profil');
            $table->string('Urusan');
            $table->text('Usulan');
            $table->string('TipeUsulan');
            $table->text('Permasalahan');
            $table->string('Alamat');
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->string('Usul_Ke');
            $table->string('SKPD_Tujuan_Awal');
            $table->string('SKPD_Tujuan_Akhir');
            $table->text('Rekomendasi_Bappeda_Mitra_OPD');
            $table->string('Koefisien');
            $table->string('Anggaran');
            $table->string('Kategori_Usulan');
            $table->text('Rekomendasi_Kelurahan_Desa');
            $table->string('Koefisien_1');
            $table->string('Anggaran_1');
            $table->text('Rekomendasi_Kecamatan');
            $table->string('Koefisien_2');
            $table->string('Anggaran_2');
            $table->text('Rekomendasi_SKPD');
            $table->string('Koefisien_3');
            $table->string('Anggaran_3');
            $table->text('Rekomendasi_Bappeda');
            $table->string('Koefisien_4');
            $table->string('Anggaran_4');
            $table->string('Status');
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
        Schema::dropIfExists('usulans');
    }
};
