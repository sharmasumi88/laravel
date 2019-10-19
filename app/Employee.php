<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    


    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone'       
    ];


      public function comapny()
    {
        return $this->hasOne('App\Companies');
    }

}
