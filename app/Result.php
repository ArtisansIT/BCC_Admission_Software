<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function scopeLastgpa(){
        return $this->latest()->first();
    }
}
