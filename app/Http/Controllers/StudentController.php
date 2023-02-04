<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
       
        return view('details_form');
    }

    function viewing(){
        $student=Student::all();
        return view('viewing',compact("student"));
    }
    function haal(Request $request){
        $student = new Student;
        $student->first_name = $request->firstname;
        $student->second_name = $request->lastname;

        $student->save();
        return redirect('/student');
        

    }

    function edit($id){
        $student = Student::find($id);
    }

    /**
     */
    public function __construct() {
    }
}
