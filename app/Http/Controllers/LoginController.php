<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Users;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('login.signin');
    }

    public function validateUser(Request $request)
    {   
        
        dd($user);
        dd($request);
    }

     public function cadastro()
    {   
        return view('login.cadastro');
    }
}
