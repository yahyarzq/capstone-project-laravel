<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dinas = [
            ["nama" => "Dinas Komunikasi dan Informatika"],
            ["nama" => "DINAS KESEHATAN"],
            ["nama" => "Dinas Pendidikan"],
            ["nama" => "Dinas Pemuda dan Olahraga"],
            ["nama" => "Dinas Sosial"],
            ["nama" => "Dinas Tenaga Kerja"],
            ["nama" => "Dinas Perhubungan"],
            ["nama" => "Dinas Kependudukan dan Pencatatan Sipil"],
            ["nama" => "Dinas Pariwisata dan Kebudayaan Kabupaten Malang"],
            ["nama" => "Dinas Pekerjaan Umum Bina Marga"],
            ["nama" => "Dinas Pekerjaan Umum Sumber Daya Air"],
            ["nama" => "Dinas Perumahan, Kawasan Permukiman dan Cipta Karya"],
            ["nama" => "Dinas Perindustrian dan Perdagangan"],
            ["nama" => "Dinas Koperasi dan Usaha Mikro"],
            ["nama" => "Dinas Tanaman pangan, Hortikultura dan Perkebunan"],
            ["nama" => "Dinas Perikanan"],
            ["nama" => "Dinas Ketahanan Pangan"],
            ["nama" => "Dinas Peternakan dan Kesehatan Hewan"],
            ["nama" => "Dinas Pemberdayaan Perempuan dan Perlindungan Anak"],
            ["nama" => "Dinas Pemberdayaan Masyarakat dan Desa"],
            ["nama" => "Dinas Pengendalian Penduduk dan Keluarga Berencana"],
            ["nama" => "Dinas Perpustakaan dan Kearsipan"],
            ["nama" => "Dinas Lingkungan Hidup"],
            ["nama" => "Dinas Pertanahan"],
            ["nama" => "Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu"],
        ];

        foreach ($dinas as $item) {
            Dinas::create($item);
        }
    }
}
