<?php

namespace App\Imports;

use App\Models\Usulan;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class UsulanImport implements ToCollection, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue
{

    public function collection(Collection  $rows)
    {
        foreach ($rows as $row) 
        {
            $data = 
                $row->toArray()
            ;
            Usulan::create($data);
        }
        
    }

    public function headingRow(): int
    {
        return 1;
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