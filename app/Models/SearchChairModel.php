<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class SearchChairModel extends Model
{
    public static function ViewChair()
    {
        $view=DB::table('tbl_chair')
                            ->select('*')
                            ->get();
        return $view;
    }
    public static function ViewChairDetail($id)
    {
        $data=DB::table('tbl_chair')->where(['chair_id'=>$id])->get();
        return $data;
    }

    public static function Check($itemid,$id)
    {
        $data=DB::table('tbl_order_master')
        ->where(['chair_id'=>$itemid])
        ->where(['cust_id'=>$id])
        ->where('status','=',0)
        ->get();
        return $data;
    }

    public static function CartInsert($itemid,$cid)
    {
        $ins=DB::table('tbl_order_master')->insert(['cust_id'=> $cid,'chair_id'=> $itemid,'o_date'=>date('Y-m-d')]);
        return $ins;
    }
}

