<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    //
       protected $fillable = [
        'name',
        'email',
        'logo'       
    ];


    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}