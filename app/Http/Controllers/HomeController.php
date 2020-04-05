<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
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
    //    alert()->success('Data','Judul')->persistent('Close');
        return view('home');
    }
}
