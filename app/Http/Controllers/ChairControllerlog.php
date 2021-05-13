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
      
        $request->validate([
            'Name'=> 'required',
            'Address'=>'required',
            'Pincode'=>'required',
            'State'=>'required',
            'Gender'=>'required',
            'Phone'=>'required',
            'Email'=>'required|email',
            'Password'=>'required|min:5|max:12'

        ]);

        //insertion into  database
            $ChairModellog =new ChairModellog;
            $ChairModellog->Name= $request->Name;
            $ChairModellog->Address= $request->Address;
            $ChairModellog->Pincode= $request->Pincode;
            $ChairModellog->State= $request->State;
            $ChairModellog->Gender= $request->Gender;
            $ChairModellog->Phone= $request->Phone;
            $ChairModellog->Email= $request->Email;
            //$ChairModellog->Password=Hash::make($request->Password);
            $ChairModellog->Password=$request->Password;
            $save = $ChairModellog->save();

            if($save){
               // return back()->with ('Success','New User has been successfully created');
               ?>
               <script type="text/javascript">
                   alert("New User has been successfully created..");
                   setTimeout(function(){window.location.href='/login'},100);
               </script>
           <?php
            }else{
                return back()->with ('Fail','Something went wrong, try again later');
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getName=request('Name');
        $getAddress=request('Address');
        $getPincode=request('Pincode');
        $getState=request('State');
        $getGender=request('Gender');
        $getPhone=request('Phone');
        $getEmail=request('Email');
        $getPassword=request('Password');
        echo $getName;
        echo $getAddress;
        echo $getPincode;
        echo $getState;
        echo $getGender;
        echo $getPhone;
        echo $getEmail;
        echo $getPassword;
        
        $chair=new ChairModellog();
        $chair->Name=$getName;
        $chair->Address=$getAddress;
        $chair->Pincode=$getPincode;
        $chair->State=$getState;
        $chair->Gender=$getGender;
        $chair->Phone=$getPhone;
        $chair->Email=$getEmail;
        $chair->Password=$getPassword;

    $chair->save();
    return redirect('/login');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
