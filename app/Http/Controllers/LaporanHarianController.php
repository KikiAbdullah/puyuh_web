<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanHarian;

class LaporanHarianController extends Controller
{
    public function index()
    {
        $data_kandang = LaporanHarian::simplePaginate(10);
        return view('laporanHarian/index', compact('data_kandang'));
    }

    public function edit($id)
    {
        $laporanHarian = LaporanHarian::find($id);
        return view('laporanHarian/edit', compact('laporanHarian','id'));
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
        $laporanHarian->id_kandang= $request->id_kandang;
        $laporanHarian->tanggal = $request->tanggal;
        $laporanHarian->jumlah_telur = $request->jumlah_telur;
        $laporanHarian->jumlah_kematian = $request->jumlah_kematian;
        $laporanHarian->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $id_user = $request->id_user;
        $id_kandang = $request->id_kandang;
        $tanggal = $request->tanggal;
        $jumlah_telur = $request->jumlah_telur;
        $jumlah_kematian = $request->jumlah_kematian;

        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->id_user = $id_user;
        $laporanHarian->id_kandang = $id_kandang;
        $laporanHarian->tanggal = $tanggal;
        $laporanHarian->jumlah_telur = $jumlah_telur;
        $laporanHarian->jumlah_kematian = $jumlah_kematian;
        $laporanHarian->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $laporanHarian = LaporanHarian::find($id);
        $laporanHarian->delete();

        return 'Data berhasil dihapus';
    }
}

