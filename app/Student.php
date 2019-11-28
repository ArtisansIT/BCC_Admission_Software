<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function batch(){
        
    }
    public static function pendingComplisionViva(){
        return Student::where('initialstatus',0)->get();
    }

    public static function vivaCompleteStudents(){
        return Student::where([
            ['initialstatus',1],
            ['admission_status',0]
        ])->get();
    }
}
