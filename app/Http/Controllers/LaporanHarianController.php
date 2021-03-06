<?php

namespace App\Http\Controllers;

use App\Kandang;
use Illuminate\Http\Request;
use App\LaporanHarian;
use DateTime;
use Illuminate\Support\Facades\DB;

class LaporanHarianController extends Controller
{
    public function indexProduksi($month = null)
    {
        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }


        $date  = date("d-m-Y");
        $index = 1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');


        $produksiPerbulan = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM laporan_harians WHERE month(tanggal)='.$month.' ORDER BY tanggal DESC');

        $produksiPertahun = DB::select('SELECT no_kandang, 
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
        FROM `laporan_harians` GROUP BY no_kandang ORDER BY no_kandang ASC');

        return view('produksi/index', compact('produksiPerbulan', 'produksiPertahun', 'date', 'index', 'month', 'monthName'));
    }

    public function indexPopulasi($month = null)
    {
        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }

        $date  = date("d-m-Y");
        $index = 1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $all_kandang = Kandang::simplePaginate(10);

        $populasiPerbulan = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM laporan_harians WHERE month(tanggal)='.$month.' ORDER BY tanggal DESC');

        $populasiPertahun = DB::select('SELECT no_kandang, 
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
        FROM `laporan_harians` GROUP BY no_kandang ORDER BY no_kandang ASC');



        return view('populasi/index', compact('all_kandang', 'populasiPerbulan', 'populasiPertahun', 'date', 'index', 'month', 'monthName'));
    }


    public function editProduksi($id)
    {
        $data_laporan = LaporanHarian::where('id', $id)->get();
        return view('produksi/edit', compact('data_laporan', 'id'));
    }

    public function editKematian($id)
    {
        $data_laporan = LaporanHarian::where('id', $id)->get();
        return view('populasi/edit-kematian', compact('data_laporan', 'id'));
    }

    public function add()
    {
        return view('laporanHarian/create');
    }

    public function show()
    {
        timezone_open("Asia/Jakarta");
        $month = date('m');

        // $laporanHarian = DB::select('SELECT * FROM laporan_harians WHERE month(tanggal) = ' . $month . ' ORDER BY created_at DESC  LIMIT 10');
        $laporanHarian = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM laporan_harians WHERE month(tanggal)='.$month.' ORDER BY tanggal DESC LIMIT 10');
        return response()->json($laporanHarian, 200);
    }

    public function showById($id)
    {
        return LaporanHarian::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $laporanHarian = new LaporanHarian;
        $laporanHarian->id_user = $request->id_user;
        $laporanHarian->no_kandang = $request->no_kandang;
        $laporanHarian->tanggal = $request->tanggal;
        $laporanHarian->jumlah_telur = $request->jumlah_telur;
        $laporanHarian->jumlah_kematian = $request->jumlah_kematian;
        $laporanHarian->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $jumlah_telur = $request->jumlah_telur;
        $jumlah_kematian = $request->jumlah_kematian;
        $jenis = $request->jenis;

        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->jumlah_telur = $jumlah_telur;
        $laporanHarian->jumlah_kematian = $jumlah_kematian;
        $laporanHarian->save();
        if ($jenis === 'kematian') {
            flash('data kematian berhasil diubah!')->success();
            return $this->indexPopulasi();
        } else {
            flash('data produksi berhasil diubah!')->success();
            return $this->indexProduksi();
        }
    }


    public function delete(request $request, $id)
    {
        $jenis = $request->jenis;

        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->delete();

        if ($jenis === 'kematian') {
            flash('data kematian berhasil diubah!')->warning();
            return $this->indexPopulasi();
        } else {
            flash('data produksi berhasil diubah!')->warning();
            return $this->indexProduksi();
        }
    }
}
