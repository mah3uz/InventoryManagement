<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    protected $fillable = ['product_id', 'buyer_id', 'quantity'];
}
