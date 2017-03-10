<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
