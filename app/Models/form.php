<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
        'f_name',
         'l_name',
         'u_name',
         'password',
         'status',
    ];
}
