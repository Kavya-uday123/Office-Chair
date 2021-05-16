<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\OrderModel;
use DB;
class OrderController extends Controller
{
    public function InsertOrder(Request $req)
    {
        $name=$req->name; 
        $number=$req->number; 
        $email=$req->email;
        $add1=$req->add1; 
        $add2=$req->add2;
        $city=$req->city;
        $zip=$req->zip;
        $message=$req->message;
        $no=$req->no;
      
        if(isset($_POST["btnpay"]))
        {
            $cid=$req->session()->get('cid');
            $inQ=OrderModel::InsertOrder($name,$number,$email,$add1,$add2,$city,$zip,$message,$cid,$no);
          
            $upQ=CartModel::UpdatePay($cid);
           // return redirect('/chairview');
           ?>
         <script type="text/javascript">
         alert("Payed Successfully..");
         setTimeout(function(){window.location.href='/confirmation'},100);
     </script>
   <?php
        }
       
    }
    
    public function ViewOrderDetails(Request $req,$cid=null)
    {

        $cid=$req->session()->get('cid');
        $dat=OrderModel::ViewBill($cid);
        if(isset($dat))
        {
            foreach($dat as $dat1)
            {
                $no=$dat1->no;
            }
        }
        $data=OrderModel::ViewOrderDetails($cid,$no);
        return view('/confirmation',['data'=>$data,'data1'=>$dat]);
       
    }

    public function ViewAllOrderDetails()
    {
       
        $data=OrderModel::ViewAllOrderDetails();
        return view('/CompletedOrders',['data'=>$data]);
       
    }
}
