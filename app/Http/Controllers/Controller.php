<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $data, $nameTemplate;

    public function verifyIsLoggedIn()
    {
        $user = session('user');

        return !empty($user);
    }

    public function onlyLoggedIn()
    {
        if (!$this->verifyIsLoggedIn()) {
            throw new \Illuminate\Http\Exceptions\HttpResponseException(redirect(route('login.signin')));
        }
    }

    public function getUserLoggedIn()
    {
        if ($this->verifyIsLoggedIn()) {
            $userSession = session('user');
            $userObj = new User();
            return $userObj->getUserByCredentials($userSession['email'], $userSession['password']);
        }

        return [];
    }

    public function renderController()
    {
        if (empty($this->nameTemplate)) {
            throw new \Exception("Nome da view não encontrado.");
        }
        return view($this->nameTemplate, $this->data);
    }
}
