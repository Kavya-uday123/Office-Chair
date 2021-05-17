<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchChairModel;
class SearchChair extends Controller
{
    public function ViewChair()
    {
        $data=SearchChairModel::ViewChair();
      
        return view('/CustomerHome',['data'=>$data]);
       
    }

    public function ViewChairDetail($id)
    {
        $data=SearchChairModel::ViewChairDetail($id);
        return view('/viewchairdetail',['data'=>$data]);
       
    }
    public function ViewItems()
    {
        $data=SearchChairModel::ViewChair();
        return view('/items',['data'=>$data]);
       
    }
    public function CartInsert(Request $req,$itemid=null,$cid=null)
    {
        if(isset($_GET["itemid"]))  $itemid=$_GET["itemid"];
      
        $cid=$req->session()->get('cid');
        
            $chk=SearchChairModel::Check($itemid,$cid);
            if(count($chk)>0)
            {
              
              return "The Selected item is already added to cart.Please choose another item";

            }else{

            $inQ=SearchChairModel::CartInsert($itemid,$cid);

            return "Item added to cart";
            }
        
       
    }
}
