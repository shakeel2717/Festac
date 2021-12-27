<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    public function UserRequest()
    {
        return $this->belongsTo(UserRequest::class,'user_requests_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function seller()
    {
        return $this->belongsTo(User::class,'seller_id');
    }


    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }



}
