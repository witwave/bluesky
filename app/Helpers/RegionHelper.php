<?php namespace App\Helpers;

use DB;

class RegionHelper
{


    public static function  getRegion($region_code)
    {
        return  DB::table('region')
            ->select('region_code', 'region_name')
            ->where('father_id', '=', $region_code)
            ->get();
    }

    public static function getProvince()
    {
         return  DB::table('region')
            ->select('region_code', 'region_name')
            ->where('region_code', '=', 30)
            ->orWhere('region_code','=',31)
            ->get();
    }
}

