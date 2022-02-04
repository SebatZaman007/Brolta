<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allproduct extends Model
{
    use HasFactory;

    protected $fillable=[
        'allproduct_image',
        'allproduct_name',
        'allproduct_newprice',
        'allproduct_oldprice',
        'allproduct_seemore',
    ];
}
