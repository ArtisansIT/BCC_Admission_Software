<?php

namespace App\Http\Controllers\Frontend;

use App\Batch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $batchs = Batch::all();
        
        return view('Frontend.home',compact('batchs'));
    }
}
