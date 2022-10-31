<?php

namespace App\Http\Controllers\MyAccount;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use RealRashid\SweetAlert\Facades\Alert;

class EditPasswordController extends FatherController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $this->onlyLoggedIn();
        $this->data['ccsHeader'] = ['my-account'];
        $this->nameTemplate = "my-account.edit-password";
        return $this->renderController();
    }

    public function update(\App\Http\Requests\EditPasswordUserRequest $request)
    {
        $this->onlyLoggedIn();
        $userObj = new User();
        $userSession = session('user');
        $user = $userObj->getUserByCredentials($userSession['email'], $userSession['password']);
        $oldPassword = $user->password;
        $data = $request->validated();
        if ($data['oldPassword'] == $oldPassword) {
            $userObj::findOrFail($user->id)->update(['password' => $data['newPassword']]);
            Session(["user" => ["email" => $userSession['email'], "password" => $data['newPassword']]]);
            Alert::toast('Senha editada com sucesso!', 'success');
            return response()->json(['success' => true], 200);
        }
        Alert::toast('Senha antiga incorreta!', 'error');
        return response()->json(['success' => true], 200);
    }
}
