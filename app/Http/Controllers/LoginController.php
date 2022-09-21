<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
<<<<<<< HEAD
use App\Models\Users;
=======
use App\Models\User;
use Illuminate\Support\Facades\DB;
>>>>>>> d35f5f064309426a67a4ee41365a14fb3c66cf56

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('login.signin');
    }

<<<<<<< HEAD
    public function validateUser(Request $request)
    {   
        
        dd($user);
        dd($request);
=======
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
>>>>>>> d35f5f064309426a67a4ee41365a14fb3c66cf56
    }

     public function cadastro()
    {   
        return view('login.cadastro');
    }
}
