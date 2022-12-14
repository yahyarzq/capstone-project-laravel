<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatans = [
            [
                "id" => 3507010,
                "nama" => "DONOMULYO"
            ],
            [
                "id" => 3507020,
                "nama" => "KALIPARE"
            ],
            [
                "id" => 3507030,
                "nama" => "PAGAK"
            ],
            [
                "id" => 3507040,
                "nama" => "BANTUR"
            ],
            [
                "id" => 3507050,
                "nama" => "GEDANGAN"
            ],
            [
                "id" => 3507060,
                "nama" => "SUMBERMANJING WETAN"
            ],
            [
                "id" => 3507070,
                "nama" => "DAMPIT"
            ],
            [
                "id" => 3507080,
                "nama" => "TIRTOYUDO"
            ],
            [
                "id" => 3507090,
                "nama" => "AMPELGADING"
            ],
            [
                "id" => 3507100,
                "nama" => "PONCOKUSUMO"
            ],
            [
                "id" => 3507110,
                "nama" => "WAJAK"
            ],
            [
                "id" => 3507120,
                "nama" => "TUREN"
            ],
            [
                "id" => 3507130,
                "nama" => "BULULAWANG"
            ],
            [
                "id" => 3507140,
                "nama" => "GONDANGLEGI"
            ],
            [
                "id" => 3507150,
                "nama" => "PAGELARAN"
            ],
            [
                "id" => 3507160,
                "nama" => "KEPANJEN"
            ],
            [
                "id" => 3507170,
                "nama" => "SUMBER PUCUNG"
            ],
            [
                "id" => 3507180,
                "nama" => "KROMENGAN"
            ],
            [
                "id" => 3507190,
                "nama" => "NGAJUM"
            ],
            [
                "id" => 3507200,
                "nama" => "WONOSARI"
            ],
            [
                "id" => 3507210,
                "nama" => "WAGIR"
            ],
            [
                "id" => 3507220,
                "nama" => "PAKISAJI"
            ],
            [
                "id" => 3507230,
                "nama" => "TAJINAN"
            ],
            [
                "id" => 3507240,
                "nama" => "TUMPANG"
            ],
            [
                "id" => 3507250,
                "nama" => "PAKIS"
            ],
            [
                "id" => 3507260,
                "nama" => "JABUNG"
            ],
            [
                "id" => 3507270,
                "nama" => "LAWANG"
            ],
            [
                "id" => 3507280,
                "nama" => "SINGOSARI"
            ],
            [
                "id" => 3507290,
                "nama" => "KARANGPLOSO"
            ],
            [
                "id" => 3507300,
                "nama" => "DAU"
            ],
            [
                "id" => 3507310,
                "nama" => "PUJON"
            ],
            [
                "id" => 3507320,
                "nama" => "NGANTANG"
            ],
            [
                "id" => 3507330,
                "nama" => "KASEMBON"
            ]];
            foreach ($kecamatans as $kecamatan ) {
                Kecamatan::create($kecamatan);
            }
        
    }
}
