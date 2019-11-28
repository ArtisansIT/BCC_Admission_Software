<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::orderBy('total','desc')
        ->get()
        ->map(function($student){
            return[
                'id'=>$student->serial_no,
                'Student Name'=>$student->name,
                'SSC GPA'=>$student->ssc_grade,
                'HHC GPA'=>$student->hsc_grade,
                'Total Mark'=>$student->total,
            
            ];
        });
        
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'SSC GPA',
            'HSC GPA',
            'Total Mark',
        ];
    }


}
