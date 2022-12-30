<?php

namespace App\Imports;

use App\Models\Usulansipd;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsulansipdImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Usulansipd([
            'No' => $row['no'],
            //'Tgl_Usul' => date('Y-m-d', strtotime($row['tgl_usul'])),
            'Tgl_Usul' => Carbon::createFromFormat('d/m/Y',$row['tgl_usul'])->toDateString(),
            // 'Tgl_Pengajuan' => date('Y-m-d', strtotime($row['tgl_pengajuan'])),
            'Tgl_Pengajuan' => Carbon::createFromFormat('d/m/Y',$row['tgl_pengajuan'])->toDateString(),
            'Pengusul' => $row['pengusul'],
            'Profil' => $row['profil'],
            'Permasalahan' => $row['permasalahan'],
            'Usulan' => $row['usulan'],
            'Urusan' => $row['urusan'],
            'Alamat' => $row['alamat'],
            'SKPD_Tujuan_Awal' => $row['skpd_tujuan_awal'],
            'SKPD_Tujuan_Akhir' => $row['skpd_tujuan_akhir'],
            'Rekomendasi_Bappeda_Mitra_OPD' => $row['rekomendasi_bappeda_mitra_opd'],
            'Kategori_Usulan' => $row['kategori_usulan'],
            'Koefisien' => $row['koefisien'],
            'Rekomendasi_Kelurahan_Desa' => $row['rekomendasi_kelurahandesa'],
            'Rekomendasi_Kecamatan' => $row['rekomendasi_kecamatan'],
            'Rekomendasi_SKPD' => $row['rekomendasi_skpd'],
            // 'No' => $row[0],
            // 'Tgl_Usul' => date('Y-m-d', strtotime($row[1])),
            // 'Tgl_Pengajuan' => date('Y-m-d', strtotime($row[2])),
            // 'Pengusul' => $row[3],
            // 'Profil' => $row[4],
            // 'Permasalahan' => $row[5],
            // 'Usulan' => $row[6],
            // 'Urusan' => $row[7],
            // 'Alamat' => $row[8],
            // 'SKPD_Tujuan_Awal' => $row[9],
            // 'SKPD_Tujuan_Akhir' => $row[10],
            // 'Rekomendasi_Bappeda_Mitra_OPD' => $row[11],
            // 'Kategori_Usulan' => $row[12],
            // 'Koefisien' => $row[13],
            // 'Rekomendasi_Kelurahan_Desa' => $row[13],
            // 'Rekomendasi_Kecamatan' => $row[14],
            // 'Rekomendasi_SKPD' => $row[15],
        ]);
    }

    public function rules(): array
    {
        return [
            'no' => 'required',
            'tgl_usul' => 'required|date_format:d/m/Y',
            'tgl_pengajuan' => 'required|date_format:d/m/Y',
            'pengusul' => 'required',
            'profil' => 'required',
            'permasalahan' => 'required',
            'usulan' => 'required',
            'urusan' => 'required',
            'alamat' => 'required',
            'skpd_tujuan_awal' => 'required',
            'skpd_tujuan_akhir' => 'required',
            'rekomendasi_bappeda_mitra_opd' => 'required',
            'kategori_usulan' => 'required',
            'koefisien' => 'nullable',
            'rekomendasi_kelurahandesa' => 'nullable',
            'rekomendasi_ecamatan' => 'nullable',
            'rekomendasi_skpd' => 'nullable',
        ];
    }

    public function prepareForValidation($data, $index){

        try {
            $data['tgl_usul'] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['tgl_usul'])->format('d/m/Y');
            $data['tgl_pengajuan'] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data['tgl_pengajuan'])->format('d/m/Y');
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $data;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
