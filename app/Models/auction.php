<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auction extends Model
{
    use HasFactory;

    
    public function getImageAttribute($value){
        return url("images/auction/")."/".$value;

    }
    
    public function user()
    {
        return $this->belongsTo(User::class,'seller_id');
    }

    public function bidding()
    {
        return $this->hasMany(BiddingController::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function auctionImage()
    {
        return $this->hasMany(AuctionImage::class);
    }
}
