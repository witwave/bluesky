<?php namespace App\Models;

use DateTime, Exception;
use Illuminate\Database\Eloquent\Model;



class OrderProduct extends Model
{
    public $timestamps = false;
    protected $table = 'order_product';


    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

}
