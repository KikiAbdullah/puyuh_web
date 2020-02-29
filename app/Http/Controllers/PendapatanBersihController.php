<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendapatanBersih;

class PendapatanBersihController extends Controller
{
    public function show()
    {
        $pendapatanBersih = PendapatanBersih::all();
        return $pendapatanBersih;
    }

    public function showById($id)
    {
        return PendapatanBersih::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $pendapatanBersih = new PendapatanBersih;
        $pendapatanBersih->bulan = $request->bulan;
        $pendapatanBersih->total = $request->total;
        $pendapatanBersih->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $bulan = $request->bulan;
        $total = $request->total;

        $pendapatanBersih = PendapatanBersih::find($id);
        $pendapatanBersih->bulan = $bulan;
        $pendapatanBersih->total = $total;;
        $pendapatanBersih->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $pendapatanBersih = PendapatanBersih::find($id);
        $pendapatanBersih->delete();

        return 'Data berhasil dihapus';
    }
}

