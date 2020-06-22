<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    public function index()
    {

        timezone_open("Asia/Jakarta");
        $date  = date("Y-m-d");

        $data_kas = Kas::all();
        $kas_pertahun = DB::select('SELECT YEAR(tanggal) as tahun ,sum(total_kas) as total FROM `kas` GROUP BY tahun');
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
        $kas = Kas::all();
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

        return redirect('kas')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(request $request, $id)
    {
        $total_kas = $request->total_kas;

        $kas = Kas::find($id);
        $kas->total_kas = $total_kas;
        $kas->save();

        return redirect('kas')->with(['success' => 'Pesan Berhasil']);
    }

    public function delete($id)
    {
        $kas = Kas::find($id);
        $kas->delete();

         
        return 'Data berhasil dihapus';
    }

    public function payment($request)
    {
        $kas = new Kas;
        $kas->total_kas = $request->total_kas;
        $kas->save();

        return 'Data berhasil ditambahkan';
    }
}

