<?php

namespace App\Imports;

use App\Models\University;
use Maatwebsite\Excel\Concerns\ToModel;

class UniversityImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new University([
            'id' => $row[0],
            'name'     => $row[1],
            'photo' => $row[3],
            'city' => $row[2],
            'address' => $row[4],
            'latitude' => $row[5],
            'longitude' => $row[6],
            'dormitory' => $row[7]
        ]);
    }
}
