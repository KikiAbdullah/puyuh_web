<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendapatanHarian;

class PendapatanHarianController extends Controller
{
    public function index()
    {
        $data_pendapatanHarian = PendapatanHarian::simplePaginate(10);
        return view('pendapatanHarian/index', compact('data_pendapatanHarian'));
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
        $pendapatanHarian->nama = $request->nama;
        $pendapatanHarian->harga = $request->harga;
        $pendapatanHarian->jumlah = $request->jumlah;
        $pendapatanHarian->satuan = $request->satuan;
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

