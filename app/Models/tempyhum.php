<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class tempyhum extends Model
{   
    protected $table = 'tempyhum';
    public $timestamps = false;
    use HasFactory, Sortable;
    
    protected $primaryKey = 'idDatabase';

    protected $fillable = [
        'ubicacion',
        'temperatura',
        'humedad',
    ];
    public $sortable = ['ubicacion',
                        'temperatura',
                        'humedad'];
}
