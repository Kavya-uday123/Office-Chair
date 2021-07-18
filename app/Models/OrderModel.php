<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class OrderModel extends Model
{
    public static function InsertOrder($name,$number,$email,$add1,$add2,$city,$zip,$message,$cid,$no)
    {
        $ins=DB::table('tbl_billing')->insert(['name'=> $name,'contact'=>$number,'email'=>$email,'add1'=>$add1,'add2'=>'null','city'=>'null','pincode'=>$zip,'shipping_add'=>$message,'cust_id'=>$cid,'no'=>$no]);
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


    public static function ViewOrderDetails($id,$no)
    {
    $sel=DB::table('tbl_order_child')
                  ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
                  ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')
                  ->where('tbl_order_master.cust_id','=',$id)
                  ->where('status','=',1)
                  ->orderBy('oc_id','DESC')
                  ->LIMIT ($no)
                  ->get();
        return $sel;
    }

    public static function ViewAllOrderDetails($fDate,$eDate)
    {
    $sel=DB::table('tbl_order_child')
                  ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
                  ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')
                  ->join('chair_modellogs','chair_modellogs.id','=','tbl_order_master.cust_id')
                  ->whereBetween('o_date', [$fDate, $eDate])
                  ->where('status','=',1)
                  ->get();
        return $sel;
    }
    public static function ViewOrderHistory($id)
    {
    $sel=DB::table('tbl_order_child')
                  ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
                  ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')
                  ->where('tbl_order_master.cust_id','=',$id)
                  ->where('status','=',1)
                  ->get();
        return $sel;
    }
}


