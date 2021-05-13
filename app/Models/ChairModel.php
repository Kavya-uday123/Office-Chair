<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class ChairModel extends Model
{
    public static function InsertData($name,$desc,$qty,$rate,$photo)
    {
        $ins=DB::table('tbl_chair')->insert(['chair_name'=> $name,'chair_desc'=> $desc,'chair_qty'=>$qty,'chair_rate'=>$rate,'chair_img'=>$photo->getClientOriginalName()]);
        return $ins;
    }

    public static function GridView()
    {
        $view=DB::table('tbl_chair')
                            ->select('*')
                            ->get();
        return $view;
    }

    public static function SelectData($editid)
    {
        $edit=DB::table('tbl_chair')->where(['chair_id'=>$editid])->get();
        return $edit;
    }
    public static function DeleteData($editid)
    {
        $delete=DB::table('tbl_chair')->where(['chair_id'=>$editid])->delete();
        return $delete;
    }

    public static function UpdateData($editid,$name,$desc,$qty,$rate)
    {
        $up=DB::table('tbl_chair')->where('chair_id','=',$editid)->update(['chair_name'=>$name,'chair_desc'=> $desc,'chair_qty'=> $qty,'chair_rate'=>$rate]);
        return $up;
    }
}
