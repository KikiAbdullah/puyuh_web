<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlertServiceProvider;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $month = date('m');
        
        $populasi = $this->populasi($month);
        $produksi = $this->produksi($month);
        $pendapatanBersih = $this->pendapatanBersih($month);
        $pengeluaran = $this->pengeluaran($month);
        $pendapatan = $this->pendapatan($month);

        return view('home', compact('populasi','produksi','pendapatanBersih','pengeluaran','pendapatan'));
    }

    public function pendapatanBersih($month)
    {
        $pendapatanBersih = DB::table('pendapatan_bersihs')->whereMonth('tanggal',$month)->get();
        foreach ($pendapatanBersih as $itemPendapatan) {
         return  $total = $itemPendapatan->total;
        }
    }

    public function populasi()
    {
       return $populasi = DB::table('kandangs')->sum('jumlah_ternak');
    }

    public function produksi($month)
    {
        return $produksi = DB::table('laporan_harians')->whereMonth('tanggal', $month)->sum('jumlah_telur');
    }

    public function pengeluaran($month)
    {
        return $pengeluaran = DB::table('pengeluaran_harians')->whereMonth('tanggal', $month)->sum('total');
    }

    public function pendapatan($month)
    {
        return $pendapatan = DB::table('pendapatan_harians')->whereMonth('tanggal', $month)->sum('total');
    }

    public function hutang()
    {
        $hutang = DB::select('SELECT * FROM `utangs`');
        foreach($hutang as $itemHutang){
            $updateHutang = DB::select('UPDATE `utangs` SET periode_kurang=periode_kurang-1');
            $updatePendapatan = DB::select('UPDATE `pendapatan_bersihs` SET total=total-'.$itemHutang->cicilan_tetap);
        }
    }
    

}
