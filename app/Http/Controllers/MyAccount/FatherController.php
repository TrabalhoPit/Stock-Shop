<?php

namespace App\Http\Controllers\MyAccount;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Route;

class FatherController extends \App\Http\Controllers\Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $this->setMenu();
    }

    private function setMenu(){
        $menu = [
            ["name" => "Minha Conta", "url" => route("myAccount.details"), "route" => "myAccount.details"],            
            ["name" => "Editar Conta", "url" => route("myAccount.edit"), "route" => "myAccount.edit"],
            ["name" => "Mudar Senha", "url" => route("myAccount.edit.password"), "route" => "myAccount.edit.password"],
            ["name" => "Sair", "url" => route("home"), "route" => "home"]
        ];
         
        $menu = $this->setActive($menu);
        $this->data['accountMenu'] = $menu;
    }

    private function setActive($menu){
        $currentRoute = Route::current()->getName();
        foreach($menu as $key => $value){
            $menu[$key]['active'] = $value['route'] == $currentRoute;
        }

        return $menu;
    }
}
