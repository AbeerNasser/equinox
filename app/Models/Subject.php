<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
    ];
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
}
