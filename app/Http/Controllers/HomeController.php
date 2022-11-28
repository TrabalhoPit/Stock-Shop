<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $this->data['isLoggedIn'] = $this->verifyIsLoggedIn();
        $this->data['user'] = $this->getUserLoggedIn();
        $this->data['ccsHeader'] = ['home', 'modal/modal-product'];
        $productModel = new Product;
        $this->data['products'] = $productModel->getLimited(8);
        $this->nameTemplate = "home";
        return $this->renderController();
    }
}
