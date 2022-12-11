<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usulansipd>
 */
class UsulansipdFactory extends Factory
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
            'Tgl_Pengajuan'=>$this->faker->date(),
            'Pengusul'=>$this->faker->name(),
            'Profil'=>"Kepala ".$this->faker->city(),
            'Urusan'=>$this->faker->sentence(),
            'Usulan'=>$this->faker->paragraph(),
            'Permasalahan'=>$this->faker->paragraph(),
            'Alamat'=>$this->faker->address()."\nMENTARAMAN",
            'SKPD_Tujuan_Awal'=>$this->faker->sentence(),
            'SKPD_Tujuan_Akhir'=>$this->faker->sentence(),
            'Rekomendasi_Bappeda_Mitra_OPD'=>$this->faker->paragraph()."\nKoefisien : ".fake()->randomDigit()." Lokasi\nAnggaran : ".fake()->randomNumber(9, true),
            'Kategori_Usulan'=>$this->faker->sentence(),
            'Koefisien'=>$this->faker->randomDigit(),
            'Rekomendasi_Kelurahan_Desa'=>$this->faker->paragraph()."\nKoefisien : ".fake()->randomDigit()." Lokasi\nAnggaran : ".fake()->randomNumber(9, true),
            'Rekomendasi_Kecamatan'=>$this->faker->paragraph()."\nKoefisien : ".fake()->randomDigit()." Lokasi\nAnggaran : ".fake()->randomNumber(9, true),
            'Rekomendasi_SKPD'=>$this->faker->paragraph()."\nKoefisien : ".fake()->randomDigit()." Lokasi\nAnggaran : ".fake()->randomNumber(9, true),
        ];
    }
}
