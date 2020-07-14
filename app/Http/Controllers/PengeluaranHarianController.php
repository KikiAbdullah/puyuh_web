<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengeluaranHarian;
use Alert;
use DateTime;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlertServiceProvider;

class PengeluaranHarianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($month = null)
    {

        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }


        $date  = date("d-m-Y");
        $index0 = $index1 = $index2 = 1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $data_pengeluaran = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM `pengeluaran_harians` WHERE tanggal= CURRENT_DATE() GROUP BY tanggal ORDER BY tanggal DESC');

        $pengeluaranPerbulan = DB::select('SELECT  DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal, SUM(total) as totalharga FROM `pengeluaran_harians` WHERE month(tanggal) = ' . $month . '  GROUP BY tanggal ORDER BY tanggal DESC');

        $pengeluaranPertahun = DB::select('SELECT MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, SUM(total) as totalharga FROM `pengeluaran_harians` GROUP BY bulan, tahun ORDER BY tanggal DESC');

        return view('pengeluaran/index', compact('data_pengeluaran', 'pengeluaranPerbulan', 'pengeluaranPertahun', 'date', 'index0', 'index1', 'index2', 'month', 'monthName'));
    }

    public function edit($id)
    {
        $data_pengeluaran = PengeluaranHarian::where('id', $id)->get();
        return view('pengeluaran/edit', compact('data_pengeluaran', 'id'));
    }

    public function add()
    {
        return view('pengeluaranHarian/create');
    }

    public function show()
    {
        $pengeluaranHarian = PengeluaranHarian::all();
        return $pengeluaranHarian;
    }

    public function showById($id)
    {
        return PengeluaranHarian::all()->where('id', $id);
    }

    public function create(request $request)
    {
        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d");

        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $total = $jumlah * $harga;

        $pengeluaranHarian = new PengeluaranHarian;
        $pengeluaranHarian->id_user = 1;
        $pengeluaranHarian->tanggal = $date;
        $pengeluaranHarian->nama = $request->nama;
        $pengeluaranHarian->harga = $harga;
        $pengeluaranHarian->jumlah = $jumlah;
        $pengeluaranHarian->satuan = $request->satuan;
        $pengeluaranHarian->total = $total;
        $pengeluaranHarian->save();

        flash('data pengeluaran berhasil ditambahkan!')->success();
        return $this->index();
    }

    public function update(request $request, $id)
    {
        $id_user = "1";
        $nama = $request->nama;
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $satuan = $request->satuan;
        $total = $harga * $jumlah;

        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->id_user = $id_user;
        $pengeluaranHarian->nama = $nama;
        $pengeluaranHarian->harga = $harga;
        $pengeluaranHarian->jumlah = $jumlah;
        $pengeluaranHarian->satuan = $satuan;
        $pengeluaranHarian->total = $total;
        $pengeluaranHarian->save();

        flash('data pengeluaran berhasil diubah!')->success();
        return $this->index();
    }

    public function delete($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->delete();

        flash('data pengeluaran berhasil dihapus!')->warning();
        return $this->index();
    }
}
