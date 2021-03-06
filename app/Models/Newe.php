<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newe extends Model
{
    protected $fillable = [
        'title', 'image', 'user_id','description',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
