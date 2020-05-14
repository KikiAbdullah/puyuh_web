<?php

namespace App\Http\Controllers;

use App\Kandang;
use Illuminate\Http\Request;
use App\LaporanHarian;
use DateTime;
use Illuminate\Support\Facades\DB;

class LaporanHarianController extends Controller
{
    public function indexProduksi($month=null)
    {
        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }

        
        $date  = date("Y-m-d");
        $index=1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');


        $produksiPerbulan = DB::select('SELECT * FROM laporan_harians WHERE month(tanggal) = '.$month);

        $produksiPertahun = DB::select('SELECT id_kandang, 
        sum(IF(month(tanggal) = 1, jumlah_telur, 0)) as januari, 
        sum(IF(month(tanggal) = 2, jumlah_telur, 0)) as februari,
        sum(IF(month(tanggal) = 3, jumlah_telur, 0)) as maret,
        sum(IF(month(tanggal) = 4, jumlah_telur, 0)) as april,
        sum(IF(month(tanggal) = 5, jumlah_telur, 0)) as mei,
        sum(IF(month(tanggal) = 6, jumlah_telur, 0)) as juni,
        sum(IF(month(tanggal) = 7, jumlah_telur, 0)) as juli,
        sum(IF(month(tanggal) = 8, jumlah_telur, 0)) as agustus,
        sum(IF(month(tanggal) = 9, jumlah_telur, 0)) as september,
        sum(IF(month(tanggal) = 10, jumlah_telur, 0)) as oktober,
        sum(IF(month(tanggal) = 11, jumlah_telur, 0)) as november,
        sum(IF(month(tanggal) = 12, jumlah_telur, 0)) as desember ,
        sum(jumlah_telur) as jumlah
        FROM `laporan_harians` GROUP BY id_kandang');

        

        return view('produksi/index', compact('produksiPerbulan','produksiPertahun','date','index','month','monthName'));
    }

    public function indexPopulasi($month=null)
    {
        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }

        
        $date  = date("Y-m-d");
        $index=1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $all_kandang = Kandang::simplePaginate(10);

        $populasiPerbulan = DB::select('SELECT * FROM laporan_harians WHERE month(tanggal) = '.$month);

        $populasiPertahun = DB::select('SELECT id_kandang, 
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
        sum(IF(month(tanggal) = 12, jumlah_kematian, 0)) as desember ,
        sum(jumlah_kematian) as jumlah
        FROM `laporan_harians` GROUP BY id_kandang');

        

        return view('populasi/index', compact('all_kandang','populasiPerbulan','populasiPertahun','date','index','month','monthName'));
    }


    public function edit($id)
    {
        $data_laporan = LaporanHarian::where('id',$id)->get();
        return view('produksi/edit', compact('data_laporan', 'id'));
    }

    public function add()
    {
        return view('laporanHarian/create');
    }

    public function show()
    {
        $laporanHarian = LaporanHarian::all();
        return $laporanHarian;
    }

    public function showById($id)
    {
        return LaporanHarian::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $laporanHarian = new LaporanHarian;
        $laporanHarian->id_user = $request->id_user;
        $laporanHarian->id_kandang = $request->id_kandang;
        $laporanHarian->tanggal = $request->tanggal;
        $laporanHarian->jumlah_telur = $request->jumlah_telur;
        $laporanHarian->jumlah_kematian = $request->jumlah_kematian;
        $laporanHarian->save();

        return 'Data berhasil ditambahka';
    }

    public function update(request $request, $id)
    {
        $jumlah_telur = $request->jumlah_telur;
        $jumlah_kematian = $request->jumlah_kematian;

        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->jumlah_telur = $jumlah_telur;
        $laporanHarian->jumlah_kematian = $jumlah_kematian;
        $laporanHarian->save();

        return redirect('produksi');
    }

    public function delete($id)
    {
        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->delete();

        return 'Data berhasil dihapus';
    }
}
