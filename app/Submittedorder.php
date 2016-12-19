<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submittedorder extends Model
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
