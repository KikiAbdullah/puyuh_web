<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function show()
    {
        $keuangan = DB::select('SELECT k.id, k.tanggal as tanggal_kas, k.total_kas, g.jumlah_gaji, g.tanggal AS tanggal_gaji FROM kas AS k JOIN gajis AS g ORDER BY k.id DESC LIMIT 1');
        return $keuangan;
    }
}
