<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    public function orderdetail()
    {
    	return $this->hasMany(Orderdetail::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function submittedorder()
    {
    	return $this->belongsTo(Submittedorder::class);
    }
}
// $card->notes; //all notes associated with the card
// $card->notes[0];
// $card->notes-> first(); fetch collection then get first
// $card->notes()->first();fetch the first in n-otes only
// $card->fresh()-notes->first();
// $card->notes()->save($note);