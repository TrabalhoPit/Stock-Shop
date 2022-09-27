<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('login.signin');
    }

    public function validateUser(LoginRequest $request)
    {
        $user = DB::select("SELECT * FROM users WHERE email LIKE :email AND password LIKE :password", ['email' => $request->input("email"), 'password' => $request->input("password")]);

        if (count($user) > 0) {
            Alert::toast('Você foi logado com sucesso!', 'success');
            Session(["user" => $user]);
            return response()->json(['success' => true, 'user' => $user]);
        } else {
            Alert::toast('Usuario ou senha inválido!', 'error');
            return response()->json(['success' => false]);
        }
    }
}
