<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'product_id';
	public $timestamps = false;
    protected $fillable = [
        'product_name', 'product_desc', 'buy_price', 'quantity_stock', 'status',
    ];

    public function orderdetail()
    {
    	return $this->hasMany(Orderdetail::class);
    	
    }
}
