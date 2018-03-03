<?php


namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;


class StudentController
{

    public function find(Request $request)
    {

        //dd($request->query('num'));

        $student = Student::where('num', $request->query('num'))->get();

       // dd($student);

        return view('search.index', compact('student'));



    }

    public function listByCenterAndSpec(Request $request, $center, $spec)
    {

        $students =  Student::where('center', strtoupper($center))
            ->where('spec', strtoupper($spec))
            ->get();

        return view('list.index', compact($students));

    }


}