<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendapatanBersih;
use Illuminate\Support\Facades\DB;

class PendapatanBersihController extends Controller
{
    public function index()
    {
        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d");

        $data_pendapatanBersih  = DB::select('SELECT id, monthname(tanggal) as bulan ,YEAR(tanggal) as tahun, sum(total) as total FROM `pendapatan_bersihs` group by monthname(tanggal)');
        return view('pendapatanBersih/index', compact('data_pendapatanBersih','date'));
    }

    public function edit($id)
    {
        $pendapatanBersih = PendapatanBersih::find($id);
        return view('pendapatanBersih/edit', compact('pendapatanBersih','id'));
    }

    public function add()
    {
        return view('pendapatanBersih/create');
    }
    
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

