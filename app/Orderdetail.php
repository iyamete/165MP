<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'order_id';
    public function order()
    {
    	return $this->belongsTo(Order::class);
    }
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
    public function submittedorder()
    {
    	return $this->belongsTo(Submitted::class);
    }
}
