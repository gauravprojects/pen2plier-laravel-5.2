<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class visitors extends Model
{
    public static function increment_count()
    {
        $date= array('date' => date("Y/m/d"));
        return DB::table('visitors')
            ->insert($date);
    }


    public static function visitors_count()
    {
        return DB::table('visitors')
            ->count();
    }
}
