<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','message','subject_id',
    ];

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
