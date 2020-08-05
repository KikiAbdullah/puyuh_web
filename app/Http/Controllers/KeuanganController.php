<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function show()
    {
        $keuangan = DB::select('SELECT k.id, DATE_FORMAT(k.tanggal,"%d-%m-%Y") as tanggal_kas, k.total_kas, g.jumlah_gaji, DATE_FORMAT(g.tanggal,"%d-%m-%Y") AS tanggal_gaji FROM kas AS k JOIN gajis AS g ON k.tanggal = g.tanggal GROUP BY k.tanggal ORDER BY k.id DESC');
        return $keuangan;
    }
}
