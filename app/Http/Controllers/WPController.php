<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\VersionUpdater\SelfUpdate;

class WPController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::select('id_kriteria', 'nama_kriteria')->orderBy('id_kriteria', 'asc')->get();
        $alternatif = Alternatif::select('id_alternatif', 'nama_alternatif')->get();
        $nilai = Nilai::select('kondisi', 'id_alternatif', 'id_kriteria')->get();
        // $hasil_vektor_s_all = $this->vektor_s();

        // dd($alternatif('id_alternatif'));
        // $nilai = Nilai::where('id_alternatif', $alternatif)->select('id_alternatif', 'id_kriteria', 'kondisi')->get();
        return view('content.metode.index', compact('kriteria', 'alternatif', 'nilai', 'hasil_vektor_s_all'));
    }

    public function weightingProductPorcess()
    {
        $this->vektor_s();
        $this->vektor_v();
        $this->rank();
        return to_route('beranda');
    }

    public function vektor_s()
    {
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
            DB::table('alternatifs')->where('id_alternatif', $alt)->update(['vektor_s' => $hasil_vektor_s]);
        }
    }

    public function vektor_v()
    {

        $alternatif = Alternatif::pluck('id_alternatif')->toArray();
        $sum_vektor_s = Alternatif::sum('vektor_s');
        foreach ($alternatif as $alt) {
            $vektor_v = [];
            $vektor_s[] = Alternatif::where('id_alternatif', $alt)->select('vektor_s')->first();

            foreach ($vektor_s as $value) {
                $vektor_v = $value->vektor_s / $sum_vektor_s;
            }

            // $hasil_vektor_v[] = array_product($vektor_v);
            DB::table('alternatifs')->where('id_alternatif', $alt)->update(['vektor_v' => $vektor_v]);
        }
    }
}
