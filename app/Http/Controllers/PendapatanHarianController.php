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

        
        $date  = date("Y-m-d");
        $index=1;
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $data_pendapatan = PendapatanHarian::simplePaginate(10);

        $pendapatanPerbulan = DB::select('SELECT id , tanggal, jumlah, harga, total FROM pendapatan_harians WHERE month(tanggal) = '.$month);

        $pendapatanPertahun = DB::select('SELECT id, monthname(tanggal) as bulan ,YEAR(tanggal) as tahun, total FROM `pendapatan_harians`');

        return view('pendapatan/index', compact('data_pendapatan','pendapatanPerbulan','pendapatanPertahun','date','index','month','monthName'));

    }


    public function edit($id)
    {
        $pendapatanHarian = PendapatanHarian::find($id);
        return view('pendapatanHarian/edit', compact('pendapatanHarian','id'));
    }

    public function add()
    {
        return view('pendapatanHarian/create');
    }
    
    public function show()
    {
        $pendapatanHarian = PendapatanHarian::all();
        return $pendapatanHarian;
    }

    public function showById($id)
    {
        return PendapatanHarian::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $pendapatanHarian = new PendapatanHarian;
        $pendapatanHarian->id_user = $request->id_user;
        $pendapatanHarian->tanggal = $request->tanggal;
        $pendapatanHarian->harga = $request->harga;
        $pendapatanHarian->jumlah = $request->jumlah;
        $pendapatanHarian->total = $request->total;
        $pendapatanHarian->save();

        return 'Data berhasil ditambahkan';
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

        $pendapatanHarian = PendapatanHarian::find($id);
        $pendapatanHarian->id_user = $id_user;
        $pendapatanHarian->tanggal = $tanggal;
        $pendapatanHarian->nama = $nama;
        $pendapatanHarian->harga = $harga;
        $pendapatanHarian->jumlah = $jumlah;
        $pendapatanHarian->satuan = $satuan;
        $pendapatanHarian->total = $total;
        $pendapatanHarian->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $pendapatanHarian = PendapatanHarian::find($id);
        $pendapatanHarian->delete();

        return 'Data berhasil dihapus';
    }
}

