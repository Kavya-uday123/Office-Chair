<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://m-moser.imgix.net/uploads/2017_11/DNB_4-2131_OR_Meeting_01-1800px.jpg?auto=format&fit=crop&crop=faces&w=1425&h=750">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/chairadd">Add</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairedit">Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairview">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairdelete">Delete</a>
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
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <table class="table"  style="background-color:#C0C0C0">
                <tr>
                    <th><center>DELETE</center></th>
                </tr>
                    <tr>
                        <td>Chair Code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">DELETE</button></td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>
</body>
</html>
