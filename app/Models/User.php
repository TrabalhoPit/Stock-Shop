<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class User extends Model
{

	use SoftDeletes;

	protected $table = 'users';
	protected $primaryKey = "id";
	protected $fillable = ['name', 'email', 'password', 'type'];
	public $timestamps = true;

	protected $hidden = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public static function getTypeNameAttribute($value)
	{
		if ($value == "1") {
			return "revendedor";
		}

		return "cliente";
	}

	public function getUserByCredentials($email, $password)
	{
		return $this->treatUser(DB::select("SELECT * FROM users WHERE email LIKE :email AND password LIKE :password", ['email' => $email, 'password' => $password])[0]);
	}

	private function treatUser($user)
	{
		$user->dateCreated = (new Carbon($user->created_at))->toDateString();
		$user->typeString = $this->getTypeNameAttribute($user->type);
		return $user;
	}
}
