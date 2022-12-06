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
            'Tgl_Usul' => $row[1],
            'Penggusul' => $row[2],
            'Profil' => $row[3],
            'Urusan' => $row[4],
            'Usualan' => $row[5]
        ]);
    }
}
