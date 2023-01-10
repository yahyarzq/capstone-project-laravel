<?php

namespace App\Exports;

use App\Models\Usulan;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsulanExport implements FromQuery, ShouldQueue, WithMapping, WithHeadings, WithStyles
{
    use Exportable;

    public function query()
    {
        return Usulan::query();
    }

    public function map($usulan): array
    {
        return [
            $usulan->No,
            Carbon::createFromFormat('Y-m-d',$usulan->Tgl_Usul)->format('d/m/Y'),
            $usulan->Pengusul,
            $usulan->Profil,
            $usulan->Urusan,
            $usulan->Usulan,
            $usulan->Permasalahan,
            $usulan->Alamat,
            $usulan->Kecamatan,
            $usulan->Desa,
            $usulan->Usul_Ke,
            $usulan->SKPD_Tujuan_Awal,
            $usulan->SKPD_Tujuan_Akhir,
            $usulan->Rekomendasi_Bappeda_Mitra_OPD,
            $usulan->Koefisien,
            $usulan->Anggaran,
            $usulan->Kategori_Usulan,
            $usulan->Koefisien_1,
            $usulan->Rekomendasi_Kelurahan_Desa,
            $usulan->Rekomendasi_Kecamatan,
            $usulan->Koefisien_2,
            $usulan->Anggaran_2,
            $usulan->Rekomendasi_SKPD,
            $usulan->Koefisien_3,
            $usulan->Anggaran_3,
            $usulan->Rekomendasi_Bappeda,
            $usulan->Koefisien_4,
            $usulan->Anggaran_4,
            $usulan->Status
        ];
    }

    public function headings(): array
    {
        return [
            "No", 
            "Tgl Usul",
            "Pengusul",
            "Profil",
            "Urusan",
            "Usulan",
            "Permasalahan",
            "Alamat",
            "Kecamatan",
            "Kelurahan",
            "Usul Ke",
            "SKPD Tujuan Awal",
            "SKPD Tujuan Akhir",
            "Rekomendasi Bappeda (Mitra OPD)",
            "Koefisien",
            "Anggaran",
            "Kategori Usulan",
            "Koefisien",
            "Rekomendasi Kelurahan/Desa",
            "Rekomendasi Kecamatan",
            "Koefisien",
            "Anggaran",
            "Rekomendasi SKPD",
            "Koefisien",
            "Anggaran",
            "Rekomendasi Bappeda",
            "Koefisien",
            "Anggaran",
            "Status" 
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:AC1')->getFill()->applyFromArray(['fillType' => 'solid','rotation' => 0, 'color' => ['rgb' => '7a7a7a'],]);
    }
}
