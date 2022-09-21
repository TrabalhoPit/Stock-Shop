<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
            echo response()->json(['user' => $user], 200);
        } else {
            echo response()->json(['error' => true, "msg" => "Usuario nao encontrado"], 200);
        }
    }
}
