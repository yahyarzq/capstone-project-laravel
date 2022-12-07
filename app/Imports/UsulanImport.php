<?php

namespace App\Imports;

use App\Models\Usulan;
use Maatwebsite\Excel\Concerns\ToModel;

class UsulanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usulan([
            'No' => $row[0],
            'Tgl_Usul' => $row[1],
            'Pengusul' => $row[2],
            'Profil' => $row[3],
            'Urusan' => $row[4],
            'Usulan' => $row[5],
            'Permasalahan' => $row[6],
            'Alamat' => $row[7],
            'Kecamatan' => $row[8],
            'Kelurahan' => $row[9],
            'Usul_Ke' => $row[10],
            'SKPD_Tujuan_Awal' => $row[11],
            'SKPD_Tujuan_Akhir' => $row[12],
            'Rekomendasi_Bappeda_Mitra_OPD' => $row[13],
            'Koefisien' => $row[14],
            'Anggaran' => $row[15],
            'Kategori_Usulan' => $row[16],
            'Koefisien_1' => $row[17],
            'Rekomendasi_Kelurahan_Desa' => $row[18],
            'Rekomendasi_Kecamatan' => $row[19],
            'Koefisien_2' => $row[20],
            'Anggaran_1' => $row[21],
            'Rekomendasi_SKPD' => $row[22],
            'Koefisien_3' => $row[23],
            'Anggaran_2' => $row[24],
            'Rekomendasi_Bappeda' => $row[25],
            'Koefisien_4' => $row[26],
            'Anggaran_3' => $row[27],
            'Status' => $row[28],
        ]);
    }
}