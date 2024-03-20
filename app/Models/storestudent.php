<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storestudent extends Model
{
    protected $fillable = [
        'fullname',
        'tel',
        'email'
    ];
}
