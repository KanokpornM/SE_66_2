<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table = 'car';

    protected $fillable = [
        'car_id',
        'model',
        'brand',
        'chassis',
        'color',
        'year',
        'ownerName',
        'ownerLastName',
        'ownerNumber',
    ];
    
}
