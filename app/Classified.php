<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    //
    protected $fillable = ['title', 'description', 'address', 'region', 'district', 'country', 'date', 'budget' , 'category'];
}
