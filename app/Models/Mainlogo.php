<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainlogo extends Model
{
    use HasFactory;

    protected $fillable=[
        'logo_name',
        'logo_image'
    ];
}
