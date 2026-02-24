<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'detail',
        'status',
        'slug',
        'email',
        'facebook'
       
    ];
}
