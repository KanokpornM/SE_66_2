<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationModel extends Model
{
    use HasFactory;
    protected $table = 'quotationq';

    protected $fillable = [
        'quotation_id',
        'carR_id',
        'detail',
        'status',
        'date',
    ];
    
}
