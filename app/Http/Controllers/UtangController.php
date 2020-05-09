<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utang;

class UtangController extends Controller
{
    public function index()
    {
        $data_utang = Utang::all();
        return view('hutang/index', compact('data_utang'));
    }

    public function edit($id)
    {
        $utang = Utang::find($id);
        return view('utang/edit', compact('utang','id'));
    }

    public function add()
    {
        return view('utang/create');
    }
    
    public function show()
    {
        $utang = Utang::all();
        return $utang;
    }

    public function showById($id)
    {
        return Utang::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $utang = new Utang;
        $utang->cicilan_tetap = $request->cicilan_tetap;
        $utang->periode_sudah = $request->periode_sudah;
        $utang->periode_kurang = $request->periode_kurang;
        $utang->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $cicilan_tetap = $request->cicilan_tetap;
        $periode_sudah = $request->periode_sudah;
        $periode_kurang = $request->periode_kurang;

        $utang = Utang::find($id);
        $utang->cicilan_tetap = $cicilan_tetap;
        $utang->periode_sudah = $periode_sudah;
        $utang->periode_kurang = $periode_kurang;
        $utang->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $utang = Utang::find($id);
        $utang->delete();

        return 'Data berhasil dihapus';
    }
}

