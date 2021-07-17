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
        $rdbpay=$req->rdbpay;
        $txtcardno=$req->txtcardno;
      
        if(isset($_POST["btnpay"]))
        {
            $req->session()->put('rdbpay',$rdbpay);
            $req->session()->put('txtcardno',$txtcardno);

            $cid=$req->session()->get('cid');
            $inQ=OrderModel::InsertOrder($name,$number,$email,$add1,$add2,$city,$zip,$message,$cid,$no);
          
            $upQ=CartModel::UpdatePay($cid);
          
           $dat=OrderModel::ViewBill($cid);
           if(isset($dat))
           {
               foreach($dat as $dat1)
               {
                   $no=$dat1->no;
               }
           }
           $sel=CartModel::ViewOrderQuantity($cid,$no);
       
            if(count($sel)>0){
                foreach ($sel as $row){

                    $qty=$row->o_qty;
                    $chairid=$row->chair_id;

                  
                    $tqty=DB::table('tbl_chair')->where('chair_id','=',$chairid)->get();
                    if(count($tqty)>0){
                        foreach ($tqty as $row1){

                    $totqty=$row1->chair_qty;        
                    $bqty=$totqty-$qty;
            
                    $up=DB::table('tbl_chair')->where('chair_id','=',$chairid)->update(['chair_qty'=>$bqty]);

                        }}
                }
            }
           // return redirect('/chairview');
           ?>
         <script type="text/javascript">
         alert("Paid Successfully..");
         setTimeout(function(){window.location.href='/confirmation'},100);
     </script>
   <?php
        }
       
    }
    
    public function ViewOrderDetails(Request $req,$cid=null)
    {

        $cid=$req->session()->get('cid');
        $txtcardno=$req->session()->get('txtcardno');
        $rdbpay=$req->session()->get('rdbpay');
        
        $dat=OrderModel::ViewBill($cid);
        if(isset($dat))
        {
            foreach($dat as $dat1)
            {
                $no=$dat1->no;
            }
        }
        $data=OrderModel::ViewOrderDetails($cid,$no);
        return view('/confirmation',['data'=>$data,'data1'=>$dat,'txtcardno'=>$txtcardno,'rdbpay'=>$rdbpay]);
       
    }

    public function ViewAllOrderDetails()
    {
       
        $data=OrderModel::ViewAllOrderDetails();
        return view('/CompletedOrders',['data'=>$data]);
       
    }
    public function ViewOrderHistory(Request $req,$cid=null)
    {
        $cid=$req->session()->get('cid');
       
        $data=OrderModel::ViewOrderHistory($cid);
        return view('/OrderHistory',['data'=>$data]);
       
    }
}
