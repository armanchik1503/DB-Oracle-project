<?php

namespace App\Imports;

use App\Models\Specialty;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfessionSpecialityImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Specialty([
            'profession_id'     => $row[0],
            'specialty_id'    => $row[1],
        ]);
    }
}
