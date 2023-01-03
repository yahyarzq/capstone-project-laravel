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
            $table->string('TipeUsulan')->nullable();
            $table->text('Permasalahan');
            $table->text('Alamat')->nullable();
            $table->string('Desa');
            $table->string('Kecamatan');
            $table->string('Usul_Ke')->nullable();
            $table->string('SKPD_Tujuan_Awal');
            $table->string('SKPD_Tujuan_Akhir');
            $table->text('Rekomendasi_Bappeda_Mitra_OPD')->nullable();
            $table->string('Koefisien')->nullable();
            $table->string('Anggaran')->nullable();
            $table->string('Kategori_Usulan')->nullable();
            $table->text('Rekomendasi_Kelurahan_Desa')->nullable();
            $table->string('Koefisien_1')->nullable();
            $table->string('Anggaran_1')->nullable();
            $table->text('Rekomendasi_Kecamatan')->nullable();
            $table->string('Koefisien_2')->nullable();
            $table->string('Anggaran_2')->nullable();
            $table->text('Rekomendasi_SKPD')->nullable();
            $table->string('Koefisien_3')->nullable();
            $table->string('Anggaran_3')->nullable();
            $table->text('Rekomendasi_Bappeda')->nullable();
            $table->string('Koefisien_4')->nullable();
            $table->string('Anggaran_4')->nullable();
            $table->string('Status')->nullable();
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
