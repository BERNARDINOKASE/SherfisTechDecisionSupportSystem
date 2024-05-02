<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index($id_alternatif)
    {
        $alternatif = Alternatif::where('id_alternatif', $id_alternatif)->select('id_alternatif', 'nama_alternatif')->first();
        // $data = Nilai::where('id_alternatif', $id)->orderBy('created_at', 'asc')->get();
        $kriteria = Kriteria::select('id_kriteria', 'nama_kriteria')->get();
        $data = Nilai::where('id_alternatif', $id_alternatif)->orderBy('created_at', 'asc')->get();
        return view('content.nilai.index', compact('data', 'alternatif', 'kriteria'));
    }

    public function edit($id_nilai)
    {
        $nilai = Nilai::where('id', $id_nilai)->first();
        $kriteria = Kriteria::pluck('id_kriteria');

        // Mengambil nilai pertama yang cocok dengan id_kriteria yang pertama dari model Nilai
        $nilai_id = Nilai::where('id_kriteria', $kriteria->first())->select('id_kriteria')->first();
        $subkriteria = SubKriteria::where('id_kriteria', $nilai->id_kriteria)->get();
        return view('content.nilai.create', compact('subkriteria', 'nilai'));
    }

    public function update(Request $request, $id_nilai)
    {
        $request->validate([
            'kondisi' => ['required', 'numeric']
        ]);

        $update = [
            'kondisi' => $request->kondisi
        ];
        Nilai::where('id', $id_nilai)->update($update);
        $data = Nilai::where('id_alternatif', $request->id_alternatif)->orderBy('created_at', 'asc')->get();
        return to_route('nilai.index', $request->id_alternatif)->with('success', 'Berhasil memperbarui kondisi.');
        return redirect()->back()->with('success', 'Nilai berhasil disimpan.');
    }

    public function destroy(string $id)
    {
        Nilai::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Subkriteria berhasil dihapus.');
    }
}
