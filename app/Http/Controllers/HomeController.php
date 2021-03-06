<?php


namespace App\Http\Controllers;

use App\Major;
use App\Stat;


class HomeController extends Controller
{
    public function index()
    {
        $stats = Stat::all();
        $majors = Major::all();

        return view('home.index', compact('stats', 'majors'));
    }

    public function dashboard()
    {
        return "DASHBOARD";
    }
}