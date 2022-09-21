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
            // dd($request); 
        $user = DB::select("SELECT * FROM users WHERE email LIKE :email AND password LIKE :password",['email' => $request->input("email"), 'password' => $request->input("password")]);

        // dd($user);
            
        if (count($user) > 0) {
            echo json_encode($user);
        } else {
            echo json_encode("usuário ou senha incorretos");
        }
    }

}
