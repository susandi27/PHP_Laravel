<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'orderdate','user_id','total','status','orderno','note'
    ]
}
