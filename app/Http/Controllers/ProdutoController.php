<?php

namespace App\Http\Controllers;

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

    public function create(){
        $user = session('user');

        $data['isLoggedIn'] = !empty($user);

        return view('produto.cadastro', $data);
    }
}
