<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // one by one stock

    /// one by one price
    public function price()
    {
        return $this->hasOne('App\Price');
    }

    /// hasmany orders


}
