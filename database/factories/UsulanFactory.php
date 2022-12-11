<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usulan>
 */
class UsulanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'No'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'Tgl_Usul'=>$this->faker->date(),
            'Pengusul'=>$this->faker->name(),
            'Profil'=>"Kepala".$this->faker->city(),
            'Urusan'=>$this->faker->sentence(),
            'Usulan'=>$this->faker->paragraph(),
            'Permasalahan'=>$this->faker->paragraph(),
            'Alamat'=>$this->faker->address(),
            'Desa_id'=>3507010003,
            'Kecamatan_id'=>3507010,
            'Usul_Ke'=>$this->faker->randomDigit(),
            'SKPD_Tujuan_Awal'=>$this->faker->sentence(),
            'SKPD_Tujuan_Akhir'=>$this->faker->sentence(),
            'Rekomendasi_Bappeda_Mitra_OPD'=>$this->faker->paragraph(),
            'Koefisien'=>$this->faker->randomDigit(),
            'Anggaran'=>$this->faker->randomNumber(9, true),
            'Kategori_Usulan'=>$this->faker->sentence(),
            'Rekomendasi_Kelurahan_Desa'=>$this->faker->paragraph(),
            'Koefisien_1'=>$this->faker->randomDigit(),
            'Anggaran_1'=>$this->faker->randomNumber(9, true),
            'Rekomendasi_Kecamatan'=>$this->faker->paragraph(),
            'Koefisien_2'=>$this->faker->randomDigit(),
            'Anggaran_2'=>$this->faker->randomNumber(9, true),
            'Rekomendasi_SKPD'=>$this->faker->paragraph(),
            'Koefisien_3'=>$this->faker->randomDigit(),
            'Anggaran_3'=>$this->faker->randomNumber(9, true),
            'Rekomendasi_Bappeda'=>$this->faker->paragraph(),
            'Koefisien_4'=>$this->faker->randomDigit(),
            'Anggaran_4'=>$this->faker->randomNumber(9, true),
            'Status'=>$this->faker->paragraph()
        ];
    }
}
