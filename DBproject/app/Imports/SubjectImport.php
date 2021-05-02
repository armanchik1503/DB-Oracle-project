<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;

class SubjectImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Subject([
            'id'                => $row[0],
            'first_subject'     => $row[1],
            'second_subject'    => $row[2],
        ]);
    }
}
