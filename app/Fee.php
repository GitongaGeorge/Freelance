<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    //
    public function student(){
        return $this->hasOne('App\Student');
    }
}
