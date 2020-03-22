<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;

class GajiController extends Controller
{
    public function index()
    {
        $data_gaji = Gaji::simplePaginate(10);
        $index = 1;
        return view('gaji/index', compact('data_gaji','index'));
    }

    public function edit($id)
    {
        $gaji = Gaji::find($id);
        return view('gaji/edit', compact('gaji','id'));
    }

    public function add()
    {
        return view('gaji/create');
    }

    public function show()
    {
        $gaji = Gaji::all();
        return $gaji;
    }

    public function showById($id)
    {
        return Gaji::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $gaji = new Gaji;
        $gaji->jumlah_gaji = $request->jumlah_gaji;
        $gaji->tanggal = $request->tanggal;
        $gaji->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $jumlah_gaji = $request->jumlah_gaji;
        $tanggal = $request->tanggal;

        $gaji = Gaji::find($id);
        $gaji->jumlah_gaji = $jumlah_gaji;
        $gaji->tanggal = $tanggal;
        $gaji->save();

        return redirect('gaji')-> with('success','Data berhasil diubah');
    }

    public function delete($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();

        return redirect('gaji')-> with('success','Data berhasil dihapus');
    }
}
