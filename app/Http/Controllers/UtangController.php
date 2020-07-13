<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utang;
use DateTime;
use Illuminate\Support\Facades\DB;

class UtangController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $month = date('m');
        $dateObj   = DateTime::createFromFormat('!m', $month);
        $monthName = $dateObj->format('F');

        $data_utang = Utang::all()->where('periode_kurang', '>', '0')->sortByDesc('tanggal');
        return view('hutang/index', compact('data_utang','monthName'));
    }

    public function edit($id)
    {
        $data_utang = Utang::where('id', $id)->get();
        return view('hutang/edit', compact('data_utang','id'));
    }

    public function add()
    {
        return view('utang/create');
    }
    
    public function show()
    {
        $utang = Utang::all()->sortByDesc('tanggal');
        return $utang;
    }

    public function showById($id)
    {
        return Utang::all()->where('id', $id);
    }

    public function create(request $request)
    {
        $utang = new Utang;
        $utang->cicilan_tetap = $request->cicilan_tetap;
        $utang->periode_sudah = "0";
        $utang->periode_kurang = $request->periode_kurang;
        $utang->save();

        flash('data hutang berhasil ditambahkan!')->success();
        return $this->index();
    }

    public function update(request $request, $id)
    {
        $cicilan_tetap = $request->cicilan_tetap;
        $periode_sudah = $request->periode_sudah;
        $periode_kurang = $request->periode_kurang;

        $utang = Utang::find($id);
        $utang->cicilan_tetap = $cicilan_tetap;
        $utang->periode_sudah = $periode_sudah;
        $utang->periode_kurang = $periode_kurang;
        $utang->save();

        flash('data hutang berhasil diubah!')->success();
        return $this->index();
    }

    public function delete($id)
    {
        $utang = Utang::find($id);
        $utang->delete();

        flash('data hutang berhasil dihapus!')->danger();
        return $this->index();
    }

    public function pembayaran($id)
    {
        try {
            $kas_pertahun = DB::select('UPDATE `utangs` SET periode_sudah = periode_sudah+1, periode_kurang=periode_kurang-1 WHERE id ='.$id);
            flash('hutang telah terbayar!')->success();
            return $this->index();
        } catch (\Throwable $th) {
            flash('hutang telah terbayar!')->success();
        return $this->index();
        }
    }
}

