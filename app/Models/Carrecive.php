<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carrecive extends Model
{
    use HasFactory;

    public static function getAll(){
        return DB::table('carrecive')->get();
    }

    public static function search($key){
        return DB::table('carrecive')->where('carR_id', $key)->get();
    }

    public static function getCarList(){
        return DB::table('car')->get();
    }
}
