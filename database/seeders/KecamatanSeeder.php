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
                "nama" => "DONOMULYO",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507020,
                "nama" => "KALIPARE",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507030,
                "nama" => "PAGAK",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507040,
                "nama" => "BANTUR",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507050,
                "nama" => "GEDANGAN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507060,
                "nama" => "SUMBERMANJING",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507070,
                "nama" => "DAMPIT",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507080,
                "nama" => "TIRTO YUDO",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507090,
                "nama" => "AMPELGADING",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507100,
                "nama" => "PONCOKUSUMO",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507110,
                "nama" => "WAJAK",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507120,
                "nama" => "TUREN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507130,
                "nama" => "BULULAWANG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507140,
                "nama" => "GONDANGLEGI",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507150,
                "nama" => "PAGELARAN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507160,
                "nama" => "KEPANJEN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507170,
                "nama" => "SUMBER PUCUNG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507180,
                "nama" => "KROMENGAN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507190,
                "nama" => "NGAJUM",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507200,
                "nama" => "WONOSARI",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507210,
                "nama" => "WAGIR",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507220,
                "nama" => "PAKISAJI",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507230,
                "nama" => "TAJINAN",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507240,
                "nama" => "TUMPANG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507250,
                "nama" => "PAKIS",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507260,
                "nama" => "JABUNG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507270,
                "nama" => "LAWANG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507280,
                "nama" => "SINGOSARI",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507290,
                "nama" => "KARANGPLOSO",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507300,
                "nama" => "DAU",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507310,
                "nama" => "PUJON",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507320,
                "nama" => "NGANTANG",
                "created_at" => NULL,
                "updated_at" => NULL,
            ],
            [
                "id" => 3507330,
                "nama" => "KASEMBON",
                "created_at" => NULL,
                "updated_at" => NULL,
            ]];
            foreach ($kecamatans as $kecamatan ) {
                Kecamatan::create($kecamatan);
            }
        
    }
}
