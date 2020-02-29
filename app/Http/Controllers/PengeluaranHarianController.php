<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengeluaranHarian;

class PengeluaranHarianController extends Controller
{
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
        $pengeluaranHarian = new PengeluaranHarian;
        $pengeluaranHarian->id_user = $request->id_user;
        $pengeluaranHarian->tanggal = $request->tanggal;
        $pengeluaranHarian->nama = $request->nama;
        $pengeluaranHarian->harga = $request->harga;
        $pengeluaranHarian->jumlah = $request->jumlah;
        $pengeluaranHarian->satuan = $request->satuan;
        $pengeluaranHarian->total = $request->total;
        $pengeluaranHarian->save();

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

        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->id_user = $id_user;
        $pengeluaranHarian->tanggal = $tanggal;
        $pengeluaranHarian->nama = $nama;
        $pengeluaranHarian->harga = $harga;
        $pengeluaranHarian->jumlah = $jumlah;
        $pengeluaranHarian->satuan = $satuan;
        $pengeluaranHarian->total = $total;
        $pengeluaranHarian->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $pengeluaranHarian = PengeluaranHarian::find($id);
        $pengeluaranHarian->delete();

        return 'Data berhasil dihapus';
    }
}

