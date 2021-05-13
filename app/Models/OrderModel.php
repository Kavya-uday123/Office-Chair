<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class OrderModel extends Model
{
    public static function InsertOrder($name,$number,$email,$add1,$add2,$city,$zip,$message,$cid)
    {
        $ins=DB::table('tbl_billing')->insert(['name'=> $name,'contact'=>$number,'email'=>$email,'add1'=>$add1,'add2'=>$add2,'city'=>$city,'pincode'=>$zip,'shipping_add'=>$message,'cust_id'=>$cid]);
        return $ins;
    }

    public static function ViewBill($id)
    {
    $mid=DB::table('tbl_billing')
                  ->where('cust_id','=',$id) 
                  ->max('billing_id');
    $sel=DB::table('tbl_billing')
                  ->where('billing_id','=',$mid) 
                  ->get();
                 
        return $sel;
    }
}
