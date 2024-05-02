<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;

class WPController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::select('id_kriteria', 'nama_kriteria')->orderBy('id_kriteria', 'asc')->get();
        $alternatif = Alternatif::select('id_alternatif', 'nama_alternatif')->get();
        $nilai = Nilai::select('kondisi', 'id_alternatif', 'id_kriteria')->get();
        // dd($alternatif('id_alternatif'));
        // $nilai = Nilai::where('id_alternatif', $alternatif)->select('id_alternatif', 'id_kriteria', 'kondisi')->get();
        return view('content.metode.index', compact('kriteria', 'alternatif', 'nilai'));
    }

    public function vektor_s()
    {
        // $alternatif = Alternatif::pluck('id_alternatif')->toArray();
        // $data = Kriteria::orderBy('created_at', 'ASC')->get();
        // $sum_kriteria = Kriteria::sum('bobot_kriteria');

        // $normalisasi = [];
        // $id_kriteria = Kriteria::pluck('id_kriteria');
        // $kondisi = Nilai::whereIn('id_alternatif', $alternatif)->whereIn('id_kriteria', $id_kriteria)->orderBy('created_at')->pluck('kondisi')->toArray();

        // foreach ($data as $item) {
        //     $hasil = $item->bobot_kriteria / $sum_kriteria; // Hitung normalisasi bobot kriteria
        //     $normalisasi[] = $hasil;
        // }

        // $vektor_s = []; // Inisialisasi array untuk nilai vektor S

        // // Perulangan untuk menghitung nilai vektor S
        // foreach ($kondisi as $key => $item) {
        //     if (isset($normalisasi[$key])) {
        //         $vektor_s[$key] = pow($item, $normalisasi[$key]); // Hitung nilai vektor S
        //     }
        // }
        // $hasil_vektor_s = array_product($vektor_s);
        // dd($hasil_vektor_s);
        // // Output nilai vektor S
        // foreach ($vektor_s as $key => $value) {
        //     dd('Nilai Vektor S untuk Kriteria' . $id_kriteria[$key] . 'adalah : ' . $value);
        // }

        $alternatif = Alternatif::pluck('id_alternatif')->toArray();
        $data = Kriteria::orderBy('created_at', 'ASC')->get();
        $sum_kriteria = Kriteria::sum('bobot_kriteria');

        $hasil_vektor_s_all = [];

        foreach ($alternatif as $alt) {
            $normalisasi = [];
            $id_kriteria = Kriteria::pluck('id_kriteria');
            $kondisi = Nilai::whereIn('id_alternatif', [$alt])->whereIn('id_kriteria', $id_kriteria)->orderBy('created_at')->pluck('kondisi')->toArray();

            foreach ($data as $item) {
                $hasil = $item->bobot_kriteria / $sum_kriteria; // Hitung normalisasi bobot kriteria
                $normalisasi[] = $hasil;
            }

            $vektor_s = []; // Inisialisasi array untuk nilai vektor S

            // Perulangan untuk menghitung nilai vektor S
            foreach ($kondisi as $key => $item) {
                if (isset($normalisasi[$key])) {
                    $vektor_s[$key] = pow($item, $normalisasi[$key]); // Hitung nilai vektor S
                }
            }

            $hasil_vektor_s = array_product($vektor_s);
            $hasil_vektor_s_all[] = $hasil_vektor_s;
            // Alternatif::where('id_alternatif', $alt)->update(['vektor_s' => $hasil_vektor_s_all]);
        }

        dd($hasil_vektor_s_all);
    }
}
