<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        timezone_open("Asia/Jakarta");
        $date  = date("d-m-Y");

        $data_kas = DB::select('SELECT *, DATE_FORMAT(tanggal,"%d-%m-%Y") AS tanggal FROM kas ORDER BY tanggal DESC');
        
        $kas_pertahun = DB::select('SELECT YEAR(tanggal) as tahun ,sum(total_kas) as total FROM `kas` GROUP BY tahun ORDER BY tanggal');
        $index = 1;
        return view('kas/index', compact('data_kas', 'kas_pertahun','index', 'date'));
    }

    public function edit($id)
    {
        $data_kas = Kas::where('id',$id)->get();
        return view('kas/edit', compact('data_kas','id'));
    }

    public function add()
    {
        return view('kas/create');
    }
    
    public function show()
    {
        $kas = Kas::all()->sortByDesc('tanggal');;
        return $kas;
    }

    public function showById($id)
    {
        return Kas::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $kas = new Kas;
        $kas->tanggal = $request->tanggal;
        $kas->total_kas = $request->total_kas;
        $kas->save();

        flash('Kas bulan ini berhasil ditambahkan!')->success();
        return $this->index();
    }

    public function update(request $request, $id)
    {
        $total_kas = $request->total_kas;

        $kas = Kas::find($id);
        $kas->total_kas = $total_kas;
        $kas->save();

        flash('Kas berhasil diubah')->success();
        return $this->index();
    }

    public function delete($id)
    {
        $kas = Kas::find($id);
        $kas->delete();

        flash('Kas berhasil dihapus')->warning();
        return $this->index();
    }
}

