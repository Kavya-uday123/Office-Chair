<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  background="https://thumbor.autonomous.ai/njZ0aC7cdSMMOa04sve3IyuNsZ8=/1600x900/filters:quality(100)/https://cdn.autonomous.ai/static/upload/images/new_post/mesh-vs-leather-chair-pros-cons-and-which-one-to-go-for-266-1541388981784.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/chairadd">Add</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairedit">Edit</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairview">View</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/UsersReport">Registered Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/CompletedOrders">Completed Orders</a>
              </li>
            </ul>
              
              <button class="btn btn-success btn-md float-end" onclick="location.href='{{ url('/') }}'">
     Logout</button>
          </div>
        </div>
      </nav>
      <br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
            <h2 align="center" style="color:grey">Add Chair</h2>
<form action="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
                <table class="table"  style="background-color:#C0C0C0">
              
                    <!-- <tr>
                        <td>Chair Code</td>
                        <td><input name="ccode" type="text" class="form-control"></td>
                    </tr> -->
                    <tr>
                        <td>Chair Name</td>
                        <td><input name="cname" type="textarea" class="form-control"></td>
                        <span class="text-danger">@error('Chair Name'){{$message}} @enderror</span>
                    </tr>
                    <tr>
                        <td>Chair Description</td>
                        <td><textarea name="cdes" type="text" class="form-control"></textarea></td>
                        <span class="text-danger">@error('Chair Description'){{$message}} @enderror</span>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input name="cqty" type="text" class="form-control"></td>
                        <span class="text-danger">@error('Quantity'){{$message}} @enderror</span>
                    </tr>
                    <tr>
                        <td>Rate</td>
                        <td><input name="crate" type="text" class="form-control"></td>
                        <span class="text-danger">@error('Rate'){{$message}} @enderror</span>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input name="cfile" type="file" class="form-control"></td>
                        <span class="text-danger">@error('Image'){{$message}} @enderror</span>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit" class="btn btn-success">ADD</button></td>
                    </tr>
                </table>
</form>
            </div>
            
            <div class="col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1"></div>
        </div>
    </div>
</body>
</html>



