<?php


namespace App\Http\Controllers;

use App\Major;
use Illuminate\Http\Request;


class MajorController extends Controller
{
    public function add()
    {
        return view('admin.add_major');
    }

    public function store(Request $request)
    {
        Major::create([

            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'spec' => $request->spec,
            'distinction' => $request->distinction,
            'center' => $request->center,
            'high_school' => $request->high_school

        ]);

        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {
        $major = Major::find($id);

        if($request->isMethod('post')) {
            $major->firstname = $request->lastname;
            $major->lastname = $request->firstname;
            $major->spec = $request->spec;
            $major->distinction = $request->distinction;
            $major->center = $request->center;
            $major->high_school = $request->high_school;

            $major->save();
            return redirect('/dashboard');
        }

        return view('admin.edit_major', compact('major'));
    }
}