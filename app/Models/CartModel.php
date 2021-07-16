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
        // return $delete;
        $delete=DB::table('tbl_order_child')->where(['om_id'=>$delid])->delete();
        return $delete;
    }

    public static function Check($mid,$cid)
    {
        $sel=DB::table('tbl_order_child')
                ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
                ->where('tbl_order_master.cust_id','=',$cid)
                ->where('tbl_order_child.om_id','=',$mid)
                ->where('tbl_order_master.status','=',0)
                ->get();
        return $sel;
       
    }

    public static function ChildInsert($mid,$qty,$pay)
    {
       
        $ins=DB::table('tbl_order_child')->insert(['om_id'=> $mid,'o_qty'=>$qty,'Payment'=>$pay,'Delivery'=>'no']);
        return $ins;
    }
    public static function ChildUpdate($mid,$qty,$pay)
    {
       
        $ins=DB::table('tbl_order_child')->where('om_id','=',$mid)->update(['o_qty'=>$qty,'Payment'=>$pay,'Delivery'=>'no']);
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
    public static function ViewOrderQuantity($cid,$no)
    {
    $sel=DB::table('tbl_order_child')
    ->join('tbl_order_master','tbl_order_master.om_id','=','tbl_order_child.om_id')
    ->join('tbl_chair','tbl_chair.chair_id','=','tbl_order_master.chair_id')
    ->where('tbl_order_master.cust_id','=',$cid)
    ->where('status','=',1)
    ->orderBy('oc_id','DESC')
    ->LIMIT ($no)
    ->get();
    return $sel;
    }
    public static function UpdateStock($chairid,$qty)
    {
        $tqty=DB::table('tbl_chair')->where('chair_id','=',$chairid)->get('chair_qty');
        
        $bqty=$tqty-$qty;

        $up=DB::table('tbl_chair')->where('chair_id','=',$chairid)->update(['chair_qty'=>$bqty]);
        return $up;

    }

    public static function ViewUserDetails($id)
    {
    $sel=DB::table('chair_modellogs')
                  ->where('id','=',$id)
                  ->get();
        return $sel;
    }
    
}
