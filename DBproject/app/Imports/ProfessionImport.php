<?php

namespace App\Imports;

use App\Models\Profession;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfessionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Profession([
            'id' => $row[0],
            'name'     => $row[1],
            'ans1'    => $row[2],
            'ans2' => $row[3],
        ]);
    }
}
