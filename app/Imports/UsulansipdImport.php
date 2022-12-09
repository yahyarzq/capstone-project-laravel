<?php

namespace App\Imports;

use App\Models\Usulansipd;
use Maatwebsite\Excel\Concerns\ToModel;

class UsulansipdImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usulansipd([
            'No' => $row[0],
            'Tgl_Usul' => date('Y-m-d', strtotime($row[1])),
            'Tgl_Pengajuan' => date('Y-m-d', strtotime($row[2])),
            'Pengusul' => $row[3],
            'Profil' => $row[4],
            'Permasalahan' => $row[5],
            'Usulan' => $row[6],
            'Urusan' => $row[7],
            'Alamat' => $row[8],
            'SKPD_Tujuan_Awal' => $row[9],
            'SKPD_Tujuan_Akhir' => $row[10],
            'Rekomendasi_Bappeda_Mitra_OPD' => $row[11],
            'Kategori_Usulan' => $row[12],
            'Koefisien' => $row[13],
            'Rekomendasi_Kelurahan_Desa' => $row[13],
            'Rekomendasi_Kecamatan' => $row[14],
            'Rekomendasi_SKPD' => $row[15],
        ]);
    }
}
