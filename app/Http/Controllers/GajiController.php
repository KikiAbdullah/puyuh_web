<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;

class GajiController extends Controller
{
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
        $gaji->bulan = $request->bulan;
        $gaji->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $jumlah_gaji = $request->jumlah_gaji;
        $bulan = $request->bulan;

        $gaji = Gaji::find($id);
        $gaji->jumlah_gaji = $jumlah_gaji;
        $gaji->bulan = $bulan;
        $gaji->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();

        return 'Data berhasil dihapus';
    }
}
