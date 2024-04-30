<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index($id)
    {
        $alternatif = Alternatif::where('id_alternatif', $id)->select('id_alternatif', 'nama_alternatif')->first();
        $data = Nilai::where('id_alternatif', $id)->orderBy('created_at', 'asc')->get();
        // dd($data);
        return view('content.nilai.index', compact('data', 'alternatif'));
    }

    public function create($id)
    {
        $alternatif = Alternatif::where('id_alternatif', $id)->select('id_alternatif', 'nama_alternatif')->first();
        $kriteria = Kriteria::select('id_kriteria', 'nama_kriteria')->orderBy('bobot_kriteria', 'asc')->get();
        $idkriteria = Kriteria::select('id_kriteria')->first();
        $subkriteria = SubKriteria::where('id_kriteria', $idkriteria)->get();
        return view('content.nilai.create', compact('alternatif', 'kriteria', 'subkriteria'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alternatif' => ['required'],
            'id_kriteria' => ['required'],
            'kondisi' => ['required', 'numeric']
        ]);

        $data = [
            'id_alternatif' => $request->id_alternatif,
            'id_kriteria' => $request->id_kriteria,
            'kondisi' => $request->kondisi
        ];

        Nilai::create($data);
        return redirect()->back()->with('success', 'Nilai berhasil disimpan.');
    }

    public function destroy(string $id)
    {
        Nilai::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Subkriteria berhasil dihapus.');
    }
}
