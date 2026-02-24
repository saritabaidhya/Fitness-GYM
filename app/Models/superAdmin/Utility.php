<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'detail',
        'path',
        'path2',
        'status',
        'category',
        'meta_keyword',
        'meta_description',
        'image',
        'slug',
        'title',
        'highlights'
    ];
}
