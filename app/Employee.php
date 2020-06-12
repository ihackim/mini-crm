<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'company',
        'phone',
    ];
    public $timestamps = false;

    public function name()
    {
        return $this->belongsTo('App\Company', 'company');
    }
}
