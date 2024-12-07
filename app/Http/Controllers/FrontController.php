<?php

namespace App\Http\Controllers;

use app\models\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        return view('front.index');
    }

    public function details(Course $course){
        return view('front.details');
    }
}
