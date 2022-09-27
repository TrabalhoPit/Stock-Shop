<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $user = session('user');
        if (empty($user)) {
            return view('login.signin');
        }

        return view('home', ['name' => $user[0]->name, "type" =>  \App\Models\User::getTypeNameAttribute($user[0]->type)]);
    }
}
