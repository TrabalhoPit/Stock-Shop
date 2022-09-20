<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{

    use SoftDeletes;
    
    protected $table = 'user';
	protected $primaryKey = "id";
    protected $fillable = ['name','email','password','type'];
    public $timestamps = true;

	protected $hidden = [
	 	'created_at',
		'updated_at',
		'deleted_at'
	];

}
