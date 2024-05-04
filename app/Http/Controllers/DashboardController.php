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
        $alternatif = Alternatif::orderBy('vektor_v', 'desc')->get();
        $vektor_v = Alternatif::sum('vektor_v');
        return view('content.dashboard', compact('countKriteria', 'countAlternatif', 'alternatif', 'vektor_v'));
    }
    public function about()
    {
        return view('content.about');
    }
}
