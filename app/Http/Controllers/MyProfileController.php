<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MyprofileModel;

class MyProfileController extends Controller
{
    public function Profile(Request $req)
    {
        $un=$req->session()->get('Name');
            return view('CustomerHome',['Name'=>$un]);
      
    }
}