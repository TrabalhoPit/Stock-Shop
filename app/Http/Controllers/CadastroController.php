<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroRequest;
use App\Models\User;

class CadastroController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function cadastro()
    {   
        return view('login.cadastro');
    }


     public function criarUsuario(CadastroRequest $request)
    {   
        $this->dados = $request->validated(); 
        // dd($this->dados);
        $user = new User();
        $user->fill($this->dados);
        // dd($user);
        $user->save();

         return response()->json(['success' => true], 200);
    }
}
