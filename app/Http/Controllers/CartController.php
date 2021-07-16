<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;

use DB;
class CartController extends Controller
{
    public function ViewCart(Request $req,$cid=null)
    {
        $cid=$req->session()->get('cid');
        $data=CartModel::ViewCart($cid);
        return view('/cart',['data'=>$data]);
       
    }
    public function DeleteCart($itemid=null)
    {
        if(isset($_GET["itemid"]))  $itemid=$_GET["itemid"];

        $data=CartModel::DeleteCart($itemid);
        
        return redirect('/cart');
    }
    public function ChildInsert(Request $req,$no=null)
    { 
        $cid=$req->session()->get('cid');
        if(isset($_POST["btnpay"]))
        {
         $no=$req->tno;
            for($i=1;$i<=$no;$i++)
                 {


            $sel=CartModel::Check($req->input('mid'.$i),$cid);
            if(count($sel)>0)   
            {
            $upQ=CartModel::ChildUpdate($req->input('mid'.$i),$req->input('txtQuantity'.$i),$req->input('txtTotal'.$i));
            }else{

           $inQ=CartModel::ChildInsert($req->input('mid'.$i),$req->input('txtQuantity'.$i),$req->input('txtTotal'.$i));
                 }
             }
                 return redirect('/checkout');
        }
    }
       
//     public function UpdatePay(Request $req)
//     {
       

//         if(isset($_POST["btnpay"]))
//         {
//             $cid=$req->session()->get('cid');
//             $upQ=CartModel::UpdatePay($cid);
//             return redirect('/chairview');
//           
//         }

//     }

    public function ViewOrder(Request $req,$cid=null)
    {
        $cid=$req->session()->get('cid');
        $data=CartModel::ViewOrder($cid);
        $udata=CartModel::ViewUserDetails($cid);
        return view('/checkout',['data'=>$data,'udata'=>$udata]);
       
    }
   
    
      
}

