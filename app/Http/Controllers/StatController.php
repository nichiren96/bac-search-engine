<?php
/**
 * Created by PhpStorm.
 * User: nichiren
 * Date: 3/3/18
 * Time: 4:15 PM
 */

namespace App\Http\Controllers;


use App\Stat;
use Illuminate\Http\Request;

class StatController
{
    public function add()
    {
        return view('admin.add_stat');
    }

    public function store(Request $request)
    {
        Stat::create([

            'label' => $request->label,
            'success_rate' => $request->success_rate,

        ]);

        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {
        $stat = Stat::find($id);

        if($request->isMethod('post')) {
            $stat->label = $request->label;
            $stat->success_rate = $request->success_rate;

            $stat->save();
            return redirect('/dashboard');
        }

        return view('admin.edit_stat', compact('stat'));
    }

}