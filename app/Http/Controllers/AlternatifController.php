<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $data = Alternatif::all();
        return view('content.alternatif.index', compact('data'));
    }
    public function create()
    {
        return view('content.alternatif.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_alternatif' => ['required'],
        ], [
            'nama_alternatif.required' => 'Nama alternatif wajib diisi.',
        ]);

        $data = [
            'id_alternatif' => 'ALTERNATIF-' . time(),
            'nama_alternatif' => $request->nama_alternatif,
        ];

        // $kriteria = Kriteria::select('id_kriteria')->first();

        $kriteria = Kriteria::all();
        $nilai = [];

        foreach ($kriteria as $key => $value) {
            $nilai[] = [
                'id_alternatif' => 'ALTERNATIF-' . time(),
                'id_kriteria' => $value->id_kriteria,
                'nilai' => $request->input($value->id_kriteria)
            ];
        }
        Alternatif::create($data);
        // dd($data, $nilai);
        foreach ($nilai as $value) {
            Nilai::create($value);
        }
        return to_route('alternatif.index')->with('success', 'Alternatif ' . $request->nama_alternatif . ' berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $data = Alternatif::where('id_alternatif', $id)->first();
        return view('content.alternatif.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alternatif' => ['required'],
        ], [
            'nama_alternatif.required' => 'Nama alternatif wajib diisi.',
        ]);

        $data = [
            'nama_alternatif' => $request->nama_alternatif,
        ];

        Alternatif::where('id_alternatif', $id)->update($data);
        return to_route('alternatif.index')->with('success', 'Alternatif ' . $request->nama_alternatif . ' berhasil diperbarui.');
    }
    public function destroy($id)
    {
        Alternatif::where('id_alternatif', $id)->delete();
        return redirect()->back()->with('success', 'Alternatif berhasil dihapus.');
    }
}
