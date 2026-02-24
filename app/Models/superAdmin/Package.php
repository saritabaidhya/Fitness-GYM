<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'image',
        'slug',
        'includes',
        'excludes',
        'amount'
       
    ];
    protected $casts = [
        'includes' => 'array', // Laravel will automatically handle JSON conversion
        'excludes' => 'array', // Laravel will automatically handle JSON conversion
    ];
}
