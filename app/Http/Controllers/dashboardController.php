<?php

namespace App\Http\Controllers;
use App\Models\Nimc;
use App\Models\Frsc;
use App\Models\Immigration;
use App\Models\Inec;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function display()
    {
        return view('dashboard.displayall',[
            'frscs' => Frsc::all(),
            'immigrations' => Immigration::all(),
            'inecs' => Inec::all(),
            'nimcs' => Nimc::all(),
        ]);
    }
}
