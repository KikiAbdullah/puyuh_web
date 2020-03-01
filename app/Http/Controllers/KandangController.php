<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandang;

class KandangController extends Controller
{
    public function index()
    {
        $data_kandang = Kandang::simplePaginate(10);
        return view('kandang/index', compact('data_kandang'));
    }

    public function edit($id)
    {
        $kandang = Kandang::find($id);
        return view('kandang/edit', compact('kandang','id'));
    }

    public function add()
    {
        return view('kandang/create');
    }

    public function show()
    {
        $kandang = Kandang::all();
        return $kandang;
    }

    public function showById($id)
    {
        return Kandang::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $kandang = new Kandang;
        $kandang->jumlah_ternak = $request->jumlah_ternak;
        $kandang->save();

        return redirect('kandang')-> with('success','Data berhasil ditambahkan');
    }

    public function update(request $request, $id)
    {
        $jumlah_ternak = $request->jumlah_ternak;

        $kandang = Kandang::find($id);
        $kandang->jumlah_ternak = $jumlah_ternak;
        $kandang->save();

        return redirect('kandang')-> with('success','Data berhasil diubah');
    }

    public function delete($id)
    {
        $kandang = Kandang::find($id);
        $kandang->delete();

        return redirect('kandang')-> with('success','Data berhasil dihapus');
    }
}
