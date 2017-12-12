<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Component(){
        return $this -> hasOne('App\Component', 'id');
    }
}
