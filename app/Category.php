<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'photo',
    ];
    //relationship method
    public function subcategory()
    {
    	return $this->hasMany('App\Subcategory');
    }
}
