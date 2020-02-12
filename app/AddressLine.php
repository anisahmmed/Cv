<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressLine extends Model
{
    protected $fillable = [
      'address','contact','email','status',
    ];
}
