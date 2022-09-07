<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [


            'order_name',
            'order_price',
            'order_quantity',
            'order_total',
            'user_id',
            'product_id'

];
}
