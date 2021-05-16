<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Document</title>
</head>
<body background="https://cdn.mos.cms.futurecdn.net/2AdwSErtbeXE6HXczRVZRd.jpg">
    <br>
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <form class="row contact_form" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                <table class="table" style="background-color:#C0C0C0">
                <tr>
                    <th>LOGIN</th>
                </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="Username" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="Password" class="form-control"></td>
                    </tr>
                    <tr>
                       <td></td>
                        <!-- <td><button class="btn btn-success" onclick="location.href='{{ url('/chairadd') }}'">Login</button> -->
                        <td>  <button class="btn btn-success" type="submit" value="submit" class="btn_3">Login</button></td></tr>
                </table>
                </form>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>
</body>
</html>