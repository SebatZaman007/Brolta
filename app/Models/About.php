<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable=[
        'about_image',
        'about_name',
        'about_description',
        'about_readmore'
    ];
}