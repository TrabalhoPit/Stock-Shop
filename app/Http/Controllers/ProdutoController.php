<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProdutoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $user = session('user');

        $this->data['isLoggedIn'] = !empty($user);
        $this->nameTemplate = "home";
        return $this->renderController();
    }

    public function create()
    {
        $this->onlyLoggedIn();
        $user = session('user');
        $this->data['isLoggedIn'] = !empty($user);
        $this->data['ccsHeader'] = ['produto'];
        $this->nameTemplate = "produto.cadastro";
        return $this->renderController();
    }

     public function criarProduto(ProductRequest $request)
    {
        $userSession = session('user');
        $userObj = new User();
        $user = $userObj->getUserByCredentials($userSession['email'], $userSession['password']);

        $this->dados = $request->validated();

        $produto = new Product();
        $produto->fill($this->dados);
        $produto->seller_id = $user->id;

        $produto->save();
        return response()->json(['success' => true, 'data' => $this->dados], 200);
    }

    public function getProductById($id)
    {
        $productModel = new Product();
        $product = $productModel->find($id);
        
        return response()->json(['success' => true, 'product' => $product]);
    }
}
