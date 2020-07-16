<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data_user = User::simplePaginate(10);
        $index = 1;
        return view('user/index', compact('data_user','index'));
    }

    public function show()
    {
        $user = User::all();
        return $user;
    }

    public function showById($id)
    {
        return User::all()->where('id', $id);
    }

    public function showProfile()
    {
        $idUser = FacadesAuth::user()->id;
        $user = User::all()->where('id', $idUser);
        return view('user/index', compact('user'));
        //show profile
    }
}
