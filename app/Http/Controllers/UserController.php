<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ini modelnya
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();

        // cek validasi user & Hash::check itu untu decrypt
        // jika $user tidak ada atau decrypt password tidak cocok maka akan ditolak
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            // set the session
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function register(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();

        return redirect('/login');
    }
}
