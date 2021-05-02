<?php

namespace App\Imports;

use App\Models\University;
use Maatwebsite\Excel\Concerns\ToModel;

class SpecialtyUniversityImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new University([
            'specialty_id'      => $row[0],
            'university_id'     => $row[1],
        ]);
    }
}
