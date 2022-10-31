<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class CadastroController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cadastro()
    {
        $this->data['ccsHeader'] = ['app'];
        $this->nameTemplate = 'login.cadastro';
        return $this->renderController();
    }


    public function criarUsuario(CadastroRequest $request)
    {
        $this->dados = $request->validated();

        $user = new User();
        $user->fill($this->dados);

        $user->save();
        return response()->json(['success' => true, 'data' => $this->dados], 200);
    }


    public function editUser(EditUserRequest $request)
    {
        $this->dados = $request->validated();
        $id = $this->dados['id'];
        unset($this->dados['id']);
        $user = new User();
        $userSession = session('user');
        $user::findOrFail($id)->update($this->dados);
        Session(["user" => ["email" => $this->dados['email'], "password" => $userSession['password']]]);
        
        Alert::toast('Usuario editado com sucesso!', 'success');
        return response()->json(['success' => true], 200);
    }
}
