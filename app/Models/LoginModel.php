<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class LoginModel extends Model
{
    //use HasFactory;

    public static function LogData($un,$pw)
    {
        $sel=DB::table('chair_modellogs')->where(['Name'=>$un,'Password'=>$pw])->get();
        return $sel;
    }
    public static function LogAdmin($un,$pw)
    {
        $sel=DB::table('login_models')->where(['Username'=>$un,'Password'=>$pw])->get();
        return $sel;
    }
}