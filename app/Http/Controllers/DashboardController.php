<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countKriteria = Kriteria::count();
        $countAlternatif = Alternatif::count();
        $alternatif = Alternatif::all();
        return view('content.dashboard', compact('countKriteria', 'countAlternatif', 'alternatif'));
    }
    public function about()
    {
        return view('content.about');
    }
}
