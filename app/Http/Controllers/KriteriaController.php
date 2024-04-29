<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $data = Kriteria::orderBy('bobot_kriteria', 'ASC')->get();
        $sum  = Kriteria::select('bobot_kriteria')->sum('bobot_kriteria');
        $rgn = Kriteria::where('tingkat_kerusakan', 'RINGAN')->max('bobot_kriteria');
        $sdg = Kriteria::where('tingkat_kerusakan', 'SEDANG')->max('bobot_kriteria');
        $brt = Kriteria::where('tingkat_kerusakan', 'BERAT')->max('bobot_kriteria');
        $ringan = $rgn / $sum;
        $sedang = $sdg / $sum;
        $berat = $brt / $sum;
        // dd($ringan);
        return view('content.kriteria.index', compact('data', 'sum', 'ringan', 'sedang', 'berat'));
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
            'bobot_kriteria' => ['required', 'numeric'],
            'tingkat_kerusakan' => ['required']
        ], [
            'nama_kriteria.required' => 'Nama kriteria wajib diisi.',
            'bobot_kriteria.required' => 'Bobot kriteria wajib diisi.',
            'bobot_kriteria.numeric' => 'Nama kriteria bertipe numerik.',
            'tingkat_kerusakan.required' => 'Tingkat kerusakan wajib diisi.',
        ]);

        $data = [
            'id_kriteria' => 'KRITERIA-' . time(),
            'nama_kriteria' => $request->nama_kriteria,
            'tingkat_kerusakan' => $request->tingkat_kerusakan,
            'bobot_kriteria' => $request->bobot_kriteria,
        ];

        Kriteria::create($data);
        return to_route('kriteria.index')->with('success', 'Kriteria ' . $request->nama_kriteria . ' berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = Kriteria::where('id_kriteria', $id)->first();
        return view('content.kriteria.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kriteria' => ['required'],
            'bobot_kriteria' => ['required', 'numeric'],
            'tingkat_kerusakan' => ['required']
        ], [
            'nama_kriteria.required' => 'Nama kriteria wajib diisi.',
            'bobot_kriteria.required' => 'Bobot kriteria wajib diisi.',
            'bobot_kriteria.numeric' => 'Nama kriteria bertipe numerik.',
            'tingkat_kerusakan.required' => 'Tingkat kerusakan wajib diisi.',
        ]);

        $data = [
            'nama_kriteria' => $request->nama_kriteria,
            'tingkat_kerusakan' => $request->tingkat_kerusakan,
            'bobot_kriteria' => $request->bobot_kriteria,
        ];

        Kriteria::where('id_kriteria', $id)->update($data);
        return to_route('kriteria.index')->with('success', 'Kriteria ' . $request->nama_kriteria . ' berhasil diperbarui.');
    }
    public function destroy(string $id)
    {
        Kriteria::where('id_kriteria', $id)->delete();
        return redirect()->back()->with('success', 'Kriteria berhasil dihapus.');
    }
}
