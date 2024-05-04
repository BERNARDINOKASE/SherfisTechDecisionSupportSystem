<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubKriteriaController extends Controller
{
    public function index($id)
    {
        $idKriteria = Kriteria::where('id_kriteria', $id)->first();
        // $data = SubKriteria::where('id_kriteria', $idKriteria)->orderBy('nama_subkriteria', 'asc')->get();
        $data = SubKriteria::where('id_kriteria', $id)->orderBy('nama_subkriteria', 'asc')->get();
        // $data = SubKriteria::where->get();
        return view('content.subkriteria.index', compact('data', 'idKriteria'));
    }

    public function create()
    {
        $kriteria = Kriteria::select('id_kriteria', 'nama_kriteria')->orderBy('nama_kriteria', 'asc')->get();
        return view('content.subkriteria.create', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kriteria' => ['required'],
            'nama_subkriteria' => ['required'],
            'nilai_subkriteria' => ['required'],
        ]);

        $data =  [
            'id_kriteria' => $request->id_kriteria,
            'nama_subkriteria' => $request->nama_subkriteria,
            'nilai_subkriteria' => $request->nilai_subkriteria,
        ];
        SubKriteria::create($data);
        return redirect()->back()
            ->with('success', 'Berhasil menambahkan subkriteria '
                . $request->nama_subkriteria . ' dengan nilai : '
                . $request->nilai_subkriteria);
    }

    public function destroy(string $id)
    {
        SubKriteria::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Subkriteria berhasil dihapus.');
    }
}
