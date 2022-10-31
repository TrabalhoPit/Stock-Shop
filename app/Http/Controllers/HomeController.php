<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $this->data['isLoggedIn'] = $this->verifyIsLoggedIn();
        $this->data['ccsHeader'] = ['home'];
        $productModel = new Product;
        $this->data['products'] = $productModel->getLimited(8);
        // dd($this->data['products']);
        $this->nameTemplate = "home";
        return $this->renderController();
    }
}
