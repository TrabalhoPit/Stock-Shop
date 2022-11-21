<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = "id";
    protected $fillable = ['name', 'description', 'seller_id', 'image', 'price','quantity','marca','category'];
    public $timestamps = true;

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getLimited($limit)
    {
        return $this->skip(0)->limit($limit)->get();
    }

    public function seller()
    {
        return $this->belongsTo('App\Models\User', 'seller_id');
    }

    public function priceFormat()
    {
        return "R$ " . number_format($this->price, 2, ',', '.');
    }
}
