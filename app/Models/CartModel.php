<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class CartModel extends Model
{
    public static function ViewCart($id)
    {
    $sel=DB::table('tbl_order_master')
                  ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')

                  ->where('cust_id','=',$id)
                  ->where('status','=',0)
                  ->get();
        return $sel;
    }
    public static function DeleteCart($delid)
    {
        $delete=DB::table('tbl_order_master')->where(['om_id'=>$delid])->delete();
        return $delete;
    }

    public static function ChildInsert($mid,$qty,$pay)
    {
        $ins=DB::table('tbl_order_child')->insert(['om_id'=> $mid,'o_qty'=>$qty,'Payment'=>$pay,'Delivery'=>'no']);
        return $ins;
    }

    public static function UpdatePay($cid)
    {
        $up=DB::table('tbl_order_master')->where('cust_id','=',$cid)->update(['status'=>1]);
        return $up;
    }

    public static function ViewOrder($id)
    {
    $sel=DB::table('tbl_order_child')
                  ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
                  ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')
                  ->where('tbl_order_master.cust_id','=',$id)
                  ->where('status','=',0)
                  ->get();
        return $sel;
    }
    
}
