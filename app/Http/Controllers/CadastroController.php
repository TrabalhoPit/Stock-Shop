<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroRequest;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

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

        $user = new User();
        $user->fill($this->dados);

        $user->save();
        return response()->json(['success' => true, 'data' => $this->dados], 200);
    }
}
