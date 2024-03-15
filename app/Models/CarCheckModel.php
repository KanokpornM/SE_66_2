<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarcheckModel extends Model
{
    use HasFactory;

    public static function search($key){
        return DB::table('carcheck')->where('carR_id', $key)->get();
    }
}
