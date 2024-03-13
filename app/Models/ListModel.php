<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ListModel extends Model
{
    use HasFactory;

    public static function getAll(){
        return DB::table('list')->get();
    }
}
