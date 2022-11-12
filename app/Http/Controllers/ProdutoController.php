<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $user = session('user');
        $this->data['isLoggedIn'] = !empty($user);
        $this->data['ccsHeader'] = ['produto'];
        $this->nameTemplate = "produto.cadastro";
        return $this->renderController();
    }

    public function getProductById($id)
    {
        $productModel = new Product();
        $product = $productModel->find($id);
        
        return response()->json(['success' => true, 'product' => $product]);
    }
}
