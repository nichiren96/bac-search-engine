<?php


namespace App\Http\Controllers;

use App\Major;
use App\Stat;


class BackController extends Controller
{
    public function index()
    {
        $stats = Stat::all();
        $majors = Major::all();

        return view('admin.dashboard', compact('stats', 'majors'));
    }

}