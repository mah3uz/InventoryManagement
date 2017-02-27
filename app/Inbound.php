<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    protected $fillable = ['product_id', 'supplier_id', 'quantity'];
}
