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


    public function index($month = null){
    
        timezone_open("Asia/Jakarta");
        if ($month == null) {
            $month = date('m');
        }

        
        $date  = date("Y-m-d");
        $index0=$index1=$index2=1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $data_pengeluaran = PengeluaranHarian::simplePaginate(10);

        $pengeluaranPerbulan = DB::select('SELECT tanggal, SUM(total) as totalharga FROM `pengeluaran_harians` WHERE month(tanggal) = '.$month.' GROUP BY tanggal');

        $pengeluaranPertahun = DB::select('SELECT MONTHNAME(tanggal) as bulan, YEAR(tanggal) as tahun, SUM(total) as totalharga FROM `pengeluaran_harians` GROUP BY bulan, tahun');

        return view('pengeluaran/index', compact('data_pengeluaran','pengeluaranPerbulan','pengeluaranPertahun','date','index0','index1','index2','month','monthName'));

    }

    public function edit($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        return view('pengeluaranHarian/edit', compact('pengeluaranHarian', 'id'));
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

        alert()->success('Berhasil menambahkan data pengeluaran', 'Berhasil!')->persistent('Close');
        return view('home');
    }

    public function update(request $request, $id)
    {
        $id_user = $request->id_user;
        $tanggal = $request->tanggal;
        $nama = $request->nama;
        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $satuan = $request->satuan;
        $total = $request->total;

        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->id_user = $id_user;
        $pengeluaranHarian->tanggal = $tanggal;
        $pengeluaranHarian->nama = $nama;
        $pengeluaranHarian->harga = $harga;
        $pengeluaranHarian->jumlah = $jumlah;
        $pengeluaranHarian->satuan = $satuan;
        $pengeluaranHarian->total = $total;
        $pengeluaranHarian->save();

        return redirect('pengeluaranHarian')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->delete();

        return redirect('pengeluaranHarian')->with('success', 'Data berhasil dihapus');
    }
}
