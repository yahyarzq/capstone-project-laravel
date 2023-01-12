<?php

namespace App\Imports;

use App\Models\Usulan;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class UsulanImport implements ToModel, WithStartRow, WithValidation, WithBatchInserts, WithChunkReading, ShouldQueue
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
            'Tgl_Usul' => Carbon::createFromFormat('d-m-Y',$row[1])->toDateString(),
            'Pengusul' => $row[2],
            'Profil' => $row[3],
            'Urusan' => $row[4],
            'Usulan' => $row[5],
            'Permasalahan' => $row[6],
            'Alamat' => $row[7],
            'Kecamatan' => $row[8],
            'Desa' => $row[9],
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
            'Anggaran_2' => $row[21],
            'Rekomendasi_SKPD' => $row[22],
            'Koefisien_3' => $row[23],
            'Anggaran_3' => $row[24],
            'Rekomendasi_Bappeda' => $row[25],
            'Koefisien_4' => $row[26],
            'Anggaran_4' => $row[27],
            'Status' => $row[28],
        ]);
    }

    public function rules(): array
    {
        return [
            '0' => 'required|unique:Usulan,No',
            '1' => 'required|date_format:d-m-Y',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required',
            '5' => 'required',
            '6' => 'required',
            '7' => 'required',
            '8' => 'required',
            '9' => 'required',
            '10' => 'nullable',
            '11' => 'required',
            '12' => 'nullable',
            '13' => 'nullable',
            '14' => 'nullable',
            '15' => 'nullable',
            '16' => 'nullable',
            '17' => 'nullable',
            '18' => 'nullable',
            '19' => 'nullable',
            '20' => 'nullable',
            '21' => 'nullable',
            '22' => 'nullable',
            '23' => 'nullable',
            '24' => 'nullable',
            '25' => 'nullable',
            '26' => 'nullable',
            '27' => 'nullable',
            '28' => 'nullable',
        ];
    }

    public function prepareForValidation($data, $index){

        try {
            $data[1] = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($data[1])->format('d-m-Y') ?? Carbon::createFromFormat('d-m-Y',$data[1])->toDateString();
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $data;
    }

    public function customValidationAttributes()
    {
        return [
            '0' => 'No',
            '1' => 'Tgl_Usul',
            '2' => 'Pengusul',
            '3' => 'Profil',
            '4' => 'Urusan',
            '5' => 'Usulan',
            '6' => 'Permasalahan',
            '7' => 'Alamat',
            '8' => 'Kecamatan',
            '9' => 'Desa/Kabupaten',
            '10' => 'Usul Ke',
            '11' => 'SKPD_Tujuan_Awal',
            '12' => 'SKPD_Tujuan_Akhir',
            '13' => 'Rekomendasi_Bappeda_Mitra_OPD',
            '14' => 'Koefisien',
            '15' => 'Anggaran',
            '16' => 'Kategori_Usulan',
            '17' => 'Koefisien',
            '18' => 'Rekomendasi_Kelurahan_Desa',
            '19' => 'Rekomendasi_Kecamatan',
            '20' => 'Koefisien',
            '21' => 'Anggaran',
            '22' => 'Rekomendasi_SKPD',
            '23' => 'Koefisien',
            '24' => 'Anggaran',
            '25' => 'Rekomendasi_Bappeda',
            '26' => 'Koefisien',
            '27' => 'Anggaran',
            '28' => 'Status',
        ];
    }

    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 200;
    }

    public function batchSize(): int
    {
        return 5;
    }
}