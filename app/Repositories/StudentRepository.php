<?php

namespace App\Repositories;

use App\Result;
use App\Student;
use Symfony\Component\HttpFoundation\Request;

class StudentRepository{
    
    public function calculateGradeMark($grade){
        $datas = Result::get();
        foreach($datas as $data){
            if($grade >= $data->gpa_start  && $grade <= $data->gpa_end  ){
              return $grade= $data->mark;
            }
        }
    }

    public function CompleteStudentAdmission( $request){
        $allid = $request->input('completeAdmission');
       foreach($allid as $data){
           $student = new Student();
           $student = $student->find($data);
           $student->admission_status = 1;
           $student->save();
       }
    }



}