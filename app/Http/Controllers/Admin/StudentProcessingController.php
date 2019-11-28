<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StudentExport;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudentRepository;
use Maatwebsite\Excel\Facades\Excel;

class StudentProcessingController extends Controller
{
    private $studentRepository;
    
    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function allStudent(Student $student){
        
    }
    public function all_pending_student(){
        return view('admin.Student.allPendingStudent');
        // allPendingStudent
    }
    public function show_student(Student $student){
        return view('admin.Student.singleStudent',compact('student'));
    }
    public function complete_calculation(Request $request , Student $student){
        $student->viva_mark = $request->viva_mark;
        $student->total = $request->viva_mark + $student->ssc_mark +  $student->hsc_mark ;
        $student->initialstatus = 1;
        $student->save();
        return redirect()->route('admin.all_pending_student');

    }
    public function all_complete_student(){
        return view('admin.Student.allCompleteStudent');
    }
    public function single_complete_student(Student $student){
        return view('admin.Student.singleComplateStudent',compact('student'));
    }
    public function complete_student_admission(Request $request, Student $student){
       
        $this->studentRepository->CompleteStudentAdmission($request);
        return Excel::download(new StudentExport,'student.xlsx');
         
    }
}
