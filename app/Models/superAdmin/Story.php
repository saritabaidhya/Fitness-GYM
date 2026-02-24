<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'path',
        'features'
       
    ];
    protected $casts = [
        'features' => 'array', // Laravel will automatically handle JSON conversion
    ];
}
