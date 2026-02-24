<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'path',
        'status',
        'meta_keyword',
        'meta_description',
        'image',
        'slug',
        'title'
    ];
}
