<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data_user = User::simplePaginate(10);
        $index = 1;
        return view('user/profile', compact('data_user','index'));
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
        $idUser = Auth::user()->id;
        $user = User::all()->where('id', $idUser);
        return view('user/profile', compact('user'));
    }
}
