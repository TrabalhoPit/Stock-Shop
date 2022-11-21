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

        $data['isLoggedIn'] = !empty($user);

        return view('home', $data);
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
        // dd('aqui');
        $user = session('user');
        $this->data['isLoggedIn'] = !empty($user);
        $userObj = User::where('email','like',$user['email'])->where('password','like',$user['password'])->first();

        $this->dados = $request->validated();

        $produto = new Product();
        // dd($this->dados);
        $produto->fill($this->dados);
         // dd($produto);
        $produto->seller_id = $userObj->id;

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
