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
        timezone_open("Asia/Jakarta");
        $month = date('m');
        

        $populasi = DB::select('SELECT sum(jumlah_ternak) as jumlah FROM `kandangs`');

        $produksi = DB::select('SELECT sum(jumlah_telur) as jumlah FROM `laporan_harians` WHERE month(tanggal)='.$month);

        return view('home', compact('populasi','produksi'));
    }
}
