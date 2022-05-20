<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'payer_id');
    }

    public function auction()
    {
        return $this->belongsTo(auction::class,'auction_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
