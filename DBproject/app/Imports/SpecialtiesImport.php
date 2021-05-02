<?php

namespace App\Imports;

use App\Models\Specialty;
use Maatwebsite\Excel\Concerns\ToModel;

class SpecialtiesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Specialty([
            'id' => $row[0],
            'name'     => $row[1],
            'code'    => $row[2]
        ]);
    }
}
