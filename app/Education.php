<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
      'institute_name','degree','passing_year','gpa','duration',
    ];
}
