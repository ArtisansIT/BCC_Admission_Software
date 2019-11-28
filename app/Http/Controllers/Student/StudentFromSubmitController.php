<?php

namespace App\Http\Controllers\Student;

use App\Batch;
use App\Result;
use App\Student;
use App\Lastdegree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class StudentFromSubmitController extends Controller
{

    public function view_form(Batch $batch){
        $lastDegree = Lastdegree::all();
        return view('Frontend.admission',compact('lastDegree' , 'batch')) ;
    }
    public function submit_form(Request $request , Student $student){

        $student->name = $request->name;
        $student->serial_no = $request->serial_no;
        $student->ssc_grade = $request->ssc_grade;
        $student->hsc_grade = $request->hsc_grade;
        $student->last_degree = $request->last_degree;
        $student->batch_id = $request->batch_id;
        $student->save();
        return redirect()->route('index');



    }
}
