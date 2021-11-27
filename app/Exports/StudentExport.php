<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }
   
    public function headings(): array
    {
        return [
            'Id',
            'StudentName',
            'Class',
            'Roll',
            'Year',
            'Created_at',
            'Updated_at',
        ];
    }
}
