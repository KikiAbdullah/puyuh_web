<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kas;

class KasController extends Controller
{
    public function index()
    {
        $data_kas = Kas::simplePaginate(10);
        $index = 1;
        return view('kas/index', compact('data_kas','index'));
    }

    public function edit($id)
    {
        $kas = Kas::find($id);
        return view('kas/edit', compact('kas','id'));
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
        $total_periode = $request->total_periode;
        $total_kas = $request->total_kas;

        $kas = Kas::find($id);
        $kas->kas_perbulan = $kas_perbulan;
        $kas->total_periode = $total_periode;
        $kas->total_kas = $total_kas;
        $kas->save();

        return 'Data berhasil diubah';
    }

    public function delete($id)
    {
        $kas = Kas::find($id);
        $kas->delete();

        return 'Data berhasil dihapus';
    }
}

