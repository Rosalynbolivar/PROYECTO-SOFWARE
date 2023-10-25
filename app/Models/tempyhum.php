<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tempyhum extends Model
{protected $table = 'tempyhum';
    use HasFactory;
    
    protected $fillable = [
        'temperatura',
        'humedad',
    ];
}
