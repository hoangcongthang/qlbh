<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudentList(Request $request)
    {
    	$studentList = [];
    	for($i = 0; $i < 10; $i++){
    		$studentList[] = [
    			'fullname' =>'Tran Van'.$i,
    			'age'      =>$i,
    			'address'  =>'Ha Noi'.$i
    		];
    	}

    	return view('student_list_method_2')->with([
    			'studentList' => $studentList
    	]);
    }

    public function showStudentList2(Request $request)
    {
        $studentList = DB::table('users')->get();

        return view('student_list2')->with([
                'studentList' => $studentList
        ]);
    }
}
