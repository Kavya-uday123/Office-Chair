<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ChairModellog extends Model
{
    public static function CheckData($un)
    {
        $sel=DB::table('chair_modellogs')->where(['Email'=>$un])->get();
        return $sel;
    }

    public static function InsertData($getName,$getAddress,$getPincode,$getState,$getGender,$getPhone,$getEmail,$getPassword,$getConfirmPassword)
    {
        $ins=DB::table('chair_modellogs')->insert(['Name'=>$getName,'Address'=> $getAddress,'Pincode'=> $getPincode,'State'=>$getState,'Gender'=>$getGender,'Phone'=>$getPhone,'Email'=>$getEmail,'Password'=>$getPassword,'ConfirmPassword'=>$getConfirmPassword]);
        return $ins;
    }
}

