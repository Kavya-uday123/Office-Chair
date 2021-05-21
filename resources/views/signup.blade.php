<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aranoz</title>
</head>
<body background="https://www.officechairsonline.in/wp-content/uploads/2016/05/office-furniture.jpg">
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="{{ Route('auth.save')}}"  method="post">
@if(Session::get('Success'))
    <div class="alert alert-success">
    {{ Session::get('Success')}}
    </div>
    @endif
    @if(Session::get('Fail'))
    <div class="alert alert-danger">
    {{ Session::get('Fail')}}
    </div>
    @endif
    @csrf
                <table class="table" style="background-color:#C0C0C0">
                <tr>
                    <th><h4 align="center" style="color:black">Sign Up</h4></th>
                </tr>
                    <tr>
                        <td>Name</td>
                        <td><input name="Name" type="text" class="form-control">
                        <span class="text-danger">@error('Name'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input name="Address" type="textarea" class="form-control">
                        <span class="text-danger">@error('Address'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Pin Code</td>
                        <td><input name="Pincode" type="text" class="form-control">
                        <span class="text-danger">@error('Pincode'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><input name="State" type="text" class="form-control">
                        <span class="text-danger">@error('State'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input name="Gender" type="text" class="form-control">
                        <span class="text-danger">@error('Gender'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input name="Phone" type="text" class="form-control">
                        <span class="text-danger">@error('Phone'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td><input name="Email" type="text" class="form-control">
                        <span class="text-danger">@error('Email'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input name="Password" type="password" class="form-control">
                        <span class="text-danger">@error('Password'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input name="ConfirmPassword" type="password" class="form-control">
                        <span class="text-danger">@error('Confirm Password'){{$message}} @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success" onclick="location.href='{{ url('/') }}'">REGISTER</button></td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>
</body>
</html>