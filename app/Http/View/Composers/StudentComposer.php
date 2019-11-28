<?php

namespace App\Http\View\Composers;

use App\Student;
use Illuminate\View\View;

class StudentComposer{

    public function incompleteVivaStudent(View $view){
         $view->with('allStudent',$this->allPendingVivaStudent());
    }
    public function completeVivaStudent(View $view){
         $view->with('allStudent',$this->vivaCompleteStudents());
    }

    public function allPendingVivaStudent() {
        return Student::pendingComplisionViva();
    }
    public function vivaCompleteStudents() {
        return Student::vivaCompleteStudents();
    }



}