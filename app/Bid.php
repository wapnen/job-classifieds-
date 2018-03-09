<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //
    protected $fillable = ['user_id','ad_id', 'details', 'bid_amount', 'status'];
}
