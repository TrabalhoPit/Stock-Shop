<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('login.signin');
    }

    public function validateUser(UserRequest $request)
    {
        $user = DB::table('users')
            ->where(["email" => $request->input("email")])
            ->first();
            
        if ($user->password === $request->input("password")) {
            echo json_encode($user);
        } else {
            echo json_encode("usuário ou senha incorretos");
        }
    }
}
