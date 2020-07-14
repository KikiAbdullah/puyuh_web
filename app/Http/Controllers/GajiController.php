<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data_gaji = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM gajis ORDER BY tanggal DESC');

        $index = 1;
        return view('gaji/index', compact('data_gaji', 'index'));
    }

    public function edit($id)
    {
        $data_gaji = Gaji::where('id', $id)->get();
        return view('gaji/edit', compact('data_gaji', 'id'));
    }

    public function add()
    {
        return view('gaji/create');
    }

    public function show()
    {
        $gaji = Gaji::all()->sortByDesc('tanggal');;
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

        flash('Data gaji berhasil ditambahkan!')->success();
        return $this->index();
    }

    public function update(request $request, $id)
    {
        $jumlah_gaji = $request->jumlah_gaji;
        $tanggal = $request->tanggal;

        $gaji = Gaji::find($id);
        $gaji->jumlah_gaji = $jumlah_gaji;
        $gaji->tanggal = $tanggal;
        $gaji->save();


        flash('Data gaji berhasil diubah')->success();
        return $this->index();
    }

    public function delete($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();

        flash('Data gaji berhasil dihapus!')->warning();
        return $this->index();
    }

    public function pembayaran()
    {
        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d H:i:s");

        $pendapatan = DB::select('SELECT total FROM `pendapatan_bersihs`');
        foreach ($pendapatan as $item) {
            $total = $item->total;
        }
        $total = $total/3;
        
        $gaji = new Gaji;
        $gaji->jumlah_gaji = $total;
        $gaji->tanggal = $date;
        $gaji->save();

        flash('Pembayaran Gaji Bulan Ini berhasil!')->success();
        return $this->index();
    }
}
