<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function order()
    {
        return $this->hasOne('App\Order');
    }
}
