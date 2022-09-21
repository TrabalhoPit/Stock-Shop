<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Users;

class CadastroController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function cadastro()
    {   
        return view('login.cadastro');
    }


     public function criarUsuario(UserRequest $request)
    {   
        $this->dados = $request->validated(); 
        dd($this->dados);
        $user = new Users();

        return view('login.cadastro');
    }
}
