<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $data = Kriteria::all();
        return view('content.kriteria.index', compact('data'));
    }
    public function create()
    {
        return view('content.kriteria.create');
    }
    public function store(Request $request)
    {
        // return 'tambah';
        $request->validate([
            'nama_kriteria' => ['required'],
            'bobot_kriteria' => ['required', 'numeric']
        ], [
            'nama_kriteria.required' => 'Nama kriteria wajib diisi.',
            'bobot_kriteria.required' => 'Bobot kriteria wajib diisi.',
            'bobot_kriteria.numeric' => 'Nama kriteria bertipe numerik.'
        ]);

        $data = [
            'id_kriteria' => 'KRITERIA-' . time(),
            'nama_kriteria' => $request->nama_kriteria,
            'bobot_kriteria' => $request->bobot_kriteria,
        ];

        Kriteria::create($data);
        return to_route('kriteria.index')->with('success', 'Kriteria ' . $request->nama_kriteria . ' berhasil ditambahkan.');
    }
    public function edit(Request $request)
    {
    }
    public function destroy(string $id)
    {
        Kriteria::where('id_kriteria', $id)->delete();
        return redirect()->back()->with('success', 'Kriteria berhasil dihapus.');
    }
}
