<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tempyhum extends Model
{   protected $table = 'tempyhum';
    public $timestamps = false;
    use HasFactory;
    
    protected $fillable = [
        'ubicacion',
        'temperatura',
        'humedad',
    ];
}
