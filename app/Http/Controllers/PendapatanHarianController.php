<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendapatanHarian;
use DateTime;
use Illuminate\Support\Facades\DB;

class PendapatanHarianController extends Controller
{
    public function index($month = null)
    {

        timezone_open("Asia/Jakarta");

        if ($month == null) {
            $month = date('m');
        }
        $date  = date("d-m-Y");
        $tanggal  = date("d-m-Y");
        $index = 1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        // $data_pendapatan =  PendapatanHarian::where('tanggal', $date)->get();
        $data_pendapatan = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM pendapatan_harians WHERE tanggal = CURRENT_DATE() ORDER BY tanggal DESC');

        $pendapatanPerbulan = DB::select('SELECT id , DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal, jumlah, harga, total FROM pendapatan_harians WHERE month(tanggal) = ' . $month . ' ORDER BY tanggal DESC');

        $pendapatanPertahun = DB::select('SELECT id, monthname(tanggal) as bulan ,YEAR(tanggal) as tahun, sum(total) as total FROM `pendapatan_harians` group by monthname(tanggal) ORDER BY tanggal ASC');

        return view('pendapatan/index', compact('data_pendapatan', 'pendapatanPerbulan', 'pendapatanPertahun', 'date', 'index', 'month', 'monthName'));
    }


    public function edit($id)
    {
        $data_pendapatan =  PendapatanHarian::where('id', $id)->get();
        return view('pendapatan/edit', compact('data_pendapatan', 'id'));
    }

    public function add()
    {
        return view('pendapatanHarian/create');
    }

    public function show()
    {
        timezone_open("Asia/Jakarta");
        $month = date('m');
        // $pendapatanHarian = PendapatanHarian::all();
        $pendapatanHarian = DB::select('SELECT * FROM pendapatan_harians WHERE month(tanggal) = '.$month.' ORDER BY created_at DESC LIMIT 10');
        return response()->json($pendapatanHarian, 200);
    }

    public function showById($id)
    {
        return PendapatanHarian::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d");
        $satuan = "kg";
        $idUser = "1";


        $pendapatanHarian = new PendapatanHarian;
        $pendapatanHarian->id_user = $idUser;
        $pendapatanHarian->tanggal = $date;
        $pendapatanHarian->harga = $harga;
        $pendapatanHarian->jumlah = $jumlah;
        $pendapatanHarian->satuan = $satuan;
        $pendapatanHarian->total = $harga*$jumlah;
        $pendapatanHarian->save();

        flash('Pendapatan berhasil ditambahkan!')->success();
        return $this->index();
    }

    public function update(request $request, $id)
    {
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $total = $harga * $jumlah;

        $pendapatanHarian = PendapatanHarian::find($id);
        $pendapatanHarian->harga = $harga;
        $pendapatanHarian->jumlah = $jumlah;
        $pendapatanHarian->total = $total;
        $pendapatanHarian->save();

        flash('Pendapatan berhasil diubah')->success();
        return $this->index();
    }

    public function delete($id)
    {
        $pendapatanHarian = PendapatanHarian::find($id);
        $pendapatanHarian->delete();

        flash('Pendapatan berhasil dihapus!')->warning();
        return $this->index();
    }

    public function kalkulasiPerbulan($month)
    {
        $pendapatan = DB::select('SELECT id , tanggal, sum(total) as total FROM pendapatan_harians WHERE month(tanggal) = ' . $month);
    }
}
