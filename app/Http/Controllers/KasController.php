<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;
use Illuminate\Support\Facades\DB;

class KasController extends Controller
{
    public function index()
    {
        $data_kas = Kas::all();
        $kas_pertahun = DB::select('SELECT YEAR(tanggal) as tahun ,sum(kas_perbulan) as total FROM `kas` GROUP BY tahun');
        $index = 1;
        return view('kas/index', compact('data_kas', 'kas_pertahun','index'));
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
        $kas->kas_perbulan = $request->kas_perbulan;
        $kas->total_periode = $request->total_periode;
        $kas->total_kas = $request->total_kas;
        $kas->save();

        return 'Data berhasil ditambahkan';
    }

    public function update(request $request, $id)
    {
        $kas_perbulan = $request->kas_perbulan;

        $kas = Kas::find($id);
        $kas->kas_perbulan = $kas_perbulan;
        $kas->save();

        return redirect('kas')->with(['success' => 'Pesan Berhasil']);
    }

    public function delete($id)
    {
        $kas = Kas::find($id);
        $kas->delete();

        return 'Data berhasil dihapus';
    }
}

