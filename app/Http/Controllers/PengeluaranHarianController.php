<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengeluaranHarian;

class PengeluaranHarianController extends Controller
{
    public function index()
    {
        $data_pengeluaranHarian = PengeluaranHarian::simplePaginate(10);
        $index = 1;
        return view('pengeluaranHarian/index', compact('data_pengeluaranHarian','index'));
    }

    public function edit($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        return view('pengeluaranHarian/edit', compact('pengeluaranHarian','id'));
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
        $total = $jumlah*$harga;

        $pengeluaranHarian = new PengeluaranHarian;
        $pengeluaranHarian->id_user = 1;
        $pengeluaranHarian->tanggal = $date;
        $pengeluaranHarian->nama = $request->nama;
        $pengeluaranHarian->harga = $harga;
        $pengeluaranHarian->jumlah = $jumlah;
        $pengeluaranHarian->satuan = $request->satuan;
        $pengeluaranHarian->total = $total;
        $pengeluaranHarian->save();

        return redirect('home')-> with('success','Data berhasil ditambahkan');

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

        return redirect('pengeluaranHarian')-> with('success','Data berhasil diubah');
    }

    public function delete($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->delete();

        return redirect('pengeluaranHarian')-> with('success','Data berhasil dihapus');
    }
}

