<?php

namespace App\Observers;

use App\Repositories\StudentRepository;
use App\Result;
use App\Student;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class StudentObserver
{
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    /**
     * Handle the student "created" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function creating(Student $student)
    {  
         $student->name = strtoupper($student->name);
         
         $student->ssc_mark = $this->studentRepository->calculateGradeMark($student->ssc_grade);
         $student->hsc_mark = $this->studentRepository->calculateGradeMark($student->hsc_grade);
        
    }

    /**
     * Handle the student "updated" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the student "deleted" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        //
    }

    /**
     * Handle the student "restored" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the student "force deleted" event.
     *
     * @param  \App\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
