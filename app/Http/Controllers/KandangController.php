<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandang;
use App\LaporanHarian;
use Illuminate\Support\Facades\DB;

class KandangController extends Controller
{
    //
    public function index()
    {
        
        //SELECT DATA KANDANG
        $data_kandang = Kandang::simplePaginate(10);
//SELECT DATA KEMATIAN
        $kematian = DB::select('SELECT id_kandang, 
        sum(IF(month(tanggal) = 1, jumlah_kematian, 0)) as januari, 
        sum(IF(month(tanggal) = 2, jumlah_kematian, 0)) as februari,
        sum(IF(month(tanggal) = 3, jumlah_kematian, 0)) as maret,
        sum(IF(month(tanggal) = 4, jumlah_kematian, 0)) as april,
        sum(IF(month(tanggal) = 5, jumlah_kematian, 0)) as mei,
        sum(IF(month(tanggal) = 6, jumlah_kematian, 0)) as juni,
        sum(IF(month(tanggal) = 7, jumlah_kematian, 0)) as juli,
        sum(IF(month(tanggal) = 8, jumlah_kematian, 0)) as agustus,
        sum(IF(month(tanggal) = 9, jumlah_kematian, 0)) as september,
        sum(IF(month(tanggal) = 10, jumlah_kematian, 0)) as oktober,
        sum(IF(month(tanggal) = 11, jumlah_kematian, 0)) as november,
        sum(IF(month(tanggal) = 12, jumlah_kematian, 0)) as desember,
        
        FROM `laporan_harians` GROUP BY id_kandang');

        //SELECT DATA KEMATIAN HARI INI
        

        $index = 1;

        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d");

        return view('kandang/populasi', compact('kematian', 'data_kandang', 'index', 'date'));


        // return view('kandang/populasi', compact('kematian'));
    }

    public function edit($id)
    {
        $kandang = Kandang::find($id);
        return view('kandang/edit', compact('kandang', 'id'));
    }

    public function add()
    {
        return view('kandang/create');
    }

    public function show()
    {
        $kandang = Kandang::all();
        return $kandang;
    }

    public function showById($id)
    {
        return Kandang::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $kandang = new Kandang;
        $kandang->jumlah_ternak = $request->jumlah_ternak;
        $kandang->save();

        return redirect('kandang')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(request $request, $id)
    {
        $jumlah_ternak = $request->jumlah_ternak;

        $kandang = Kandang::find($id);
        $kandang->jumlah_ternak = $jumlah_ternak;
        $kandang->save();

        return redirect('kandang')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $kandang = Kandang::find($id);
        $kandang->delete();

        return redirect('kandang')->with('success', 'Data berhasil dihapus');
    }
}
