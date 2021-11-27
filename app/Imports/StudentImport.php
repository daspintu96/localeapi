<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
           
            'studentName' => $row[1],
            'class' => $row[2],
            'roll' => $row[3],
            'year' => $row[4],
            'created_at' => $row[5],
            'updated_at' => $row[6],
        ]);
    }
}
