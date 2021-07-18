<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\ChairModellog;

class ChairControllerlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup');
    }
    public function login()
    {
      
        return view('login');
    }
    
    public function save(Request $request)
    {
        $getName=request("Name");
        $getAddress=request("Address");
        $getPincode=request("Pincode");
        $getState=request("State");
        $getGender=request("Gender");
        $getPhone=request("Phone");
        $getEmail=request("Email");
        $getPassword=request("Password");
        $getConfirmPassword=request("ConfirmPassword");

        $request->validate([
            'Name'=>'required',
            'Address'=>'required',
            'Pincode'=>'required|numeric|digits:6',
            'State'=>'required',
            'Gender'=>'required',
            'Phone'=>'required|numeric|digits:10',
            'Email'=>'required|email|',
            'Password'=>'required|min:5|max:15',
            'ConfirmPassword'=>'required|min:5|max:15'
        ]);
        $log=ChairModellog::CheckData($getEmail);

        if(count($log)>0)
        {
            ?>
                <script type="text/javascript">
                            alert("Username/Email Already Exist..");
                            setTimeout(function(){window.location.href='/signup'},100);
                        </script>
       <?php
        }
       
                else if($getPassword==$getConfirmPassword)
                    {
                     $log=ChairModellog::InsertData($getName,$getAddress,$getPincode,$getState,$getGender,$getPhone,$getEmail,$getPassword,$getConfirmPassword);
                        ?>
                        <script type="text/javascript">
                            alert("Registration Successfull..");
                            setTimeout(function(){window.location.href='/login'},100);
                        </script>
                    <?php
                     }else{
                        ?>
                        <script type="text/javascript">
                        alert("Confirm Password Mismatch..");
                        setTimeout(function(){window.location.href='/signup'},100);
                    </script>
                     <?php
                    }
            
            
    }
  
    function check(Request $request) {
        //validates requests
        $request->validate([
            'Email'=>'required|email',
            'Password'=>'required|min:5|max:15'
        ]);

        $userInfo = ChairModellog::where('Email','=',$request->Email)->first();
        if(!$userInfo){
            return back()-> with ('fail', 'We dont recognize your email');
    }else {
            //check password
            if($request->Password==$userInfo->Password){
                echo("sucess");

                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/');
            }else {
                return back()-> with ('fail', 'Incorrect Password');
            }
        }
    }
    function logout() {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    function dashboard(Request $request){
        $data=['LoggedUserInfo'=>ChairModellog::where('id','=',session('LoggedUser'))->first()];
        return view('dashboard',$data);
    }
}

   