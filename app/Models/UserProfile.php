<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    public function getImageAttribute($value){
        return url("images/users/")."/".$value;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
