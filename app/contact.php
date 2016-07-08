<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    public static function store($input_array)
    {
        return DB::table('contact_us')
            ->insert($input_array);
    }
}
