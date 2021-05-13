<?php

namespace App\Http\Controllers;
use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function CustomerLog(Request $req)
    {
        $un=$req->Name;
        $pw=$req->Password;

        $log=LoginModel::LogData($un,$pw);

        if(count($log)>0)
        {
            
                foreach($log as $row)
                {
                    $id=$row->id;
                    $name=$row->Name;
                }
            
            $req->session()->put('Name',$name);
            $req->session()->put('cid',$id);
            return redirect('CustomerHome');
        }
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/login'},100);
        </script>
<?php
        }
        
    }
    public function AdminLog(Request $req)
    {
        $un=$req->Username;
        $pw=$req->Password;

        $log=LoginModel::LogAdmin($un,$pw);

        if(count($log)>0)
        {
            $req->session()->put('Name',$un);
            
            return redirect("admindex");
        }
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/loginm'},100);
        </script>
<?php
        }
        
    }
    public function logout(Request $req)
    {
        $req->session()->forget('Name');
        return redirect('/login');
    }

}
   