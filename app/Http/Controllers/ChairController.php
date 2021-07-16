<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ChairModel;

class ChairController extends Controller
{
    public function InsertChair(Request $req)
    {
        $req->validate([
            'cname'=>'required',
            'cdes'=>'required',
            'cqty'=>'required|numeric',
            'crate'=>'required|numeric',
            'cfile'=>'required',
            
        ]);
        $name=$req->cname; 
        $desc=$req->cdes; 
        $qty=$req->cqty;
        $rate=$req->crate; 

        $photo=$req->cfile;
        $destination=public_path().'\Images';
        $photo->move($destination,$photo->getClientOriginalName());

        if(isset($_POST["submit"]))
        {
            

            $inQ=ChairModel::InsertData($name,$desc,$qty,$rate,$photo);
            return redirect('/chairadd');
        }
       
    }
    public function ViewChair()
    {
        $data=ChairModel::GridView();
        return view('/chairview',['data'=>$data]);
       
    }
    public function ViewStock()
    {
        $data=ChairModel::GridView();
        return view('/stockview',['data'=>$data]);
       
    }

    public function SelectChair($editid=null)
    {
        if(isset($_GET["editid"]))  $editid=$_GET["editid"];

        $data=ChairModel::SelectData($editid);

        return view('/chairedit',['data'=>$data]);
    }
    public function DeleteChair($cid)
    {
        $data=ChairModel::DeleteData($cid);
      
         ?>
         <script type="text/javascript">
         alert("Deleted..");
         setTimeout(function(){window.location.href='/chairview'},100);
     </script>
   <?php
    }

    public function UpdateChair(Request $req,$editid=null)
    {
        if(isset($_GET["editid"]))
        $editid=$_GET["editid"];

        $name=$req->cname; 
        $desc=$req->cdes; 
        $qty=$req->cqty;
        $rate=$req->crate; 

       $photo=$req->cfile;
      
       if(isset($photo)){

        $ph=$req->cfile;
        $filename=$ph->getClientOriginalName();
        $destination=public_path().'\Images';
        $ph->move($destination,$ph->getClientOriginalName());
       }
       else{
           $filename=$req->hfile;
          
       }

      

        if(isset($_POST["btnupdate"]))
        {
            $upQ=ChairModel::UpdateData($editid,$name,$desc,$qty,$rate,$filename);
            return redirect('/chairview');
        }

    }

}
