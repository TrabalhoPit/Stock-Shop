<?php

namespace App\Http\Controllers\MyAccount;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MyAccountController extends FatherController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $this->onlyLoggedIn();
        $userSession = session('user');
        $userObj = new User();
        $this->data['user'] = $userObj->getUserByCredentials($userSession['email'], $userSession['password']);
        $this->data['ccsHeader'] = ['my-account'];
        $this->nameTemplate = "my-account.details-account";
        return $this->renderController();
    }
}
