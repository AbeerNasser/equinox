<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'name','title', 'photo', 'description','facebook_link','twitter_link',
    ];
}
