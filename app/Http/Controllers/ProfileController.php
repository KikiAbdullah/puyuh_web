<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileController extends Controller
{
    public function index()
    {
        $data_user = User::simplePaginate(10);
        $index = 1;
        return view('user/index', compact('data_user','index'));
    }

    public function show()
    {
        $user = User::all();
        return response()->json($user, 200);
    }

    public function showById($id)
    {
        $user = User::all()->where('id', $id);
        return response()->json($user, 200);
    }

    public function showProfile()
    {
        $idUser = FacadesAuth::user()->id;
        $user = User::all()->where('id', $idUser);
        return view('user/index', compact('user'));
        //show profile
    }
}
