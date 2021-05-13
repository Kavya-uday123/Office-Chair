<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img height="100 px" src="https://www.biofit.com/assets/ui/biofit-logo-400.png">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/items">Items</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/contactus">Contact Us</a>
              </li>
            </ul>
            <button class="btn btn-success btn-md float-end" onclick="location.href='{{ url('login') }}'">
     Login</button>
          </div>
        </div>
      </nav>
      <br>
      
<div class="row" style="background-color:lightgray;">
    <p>
<p>&nbsp&nbsp&nbspAddress: HillView Road, Kochi 31/13<br>
    &nbsp&nbsp&nbspE-Mail: info@hometown.ge<br></p>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHours of Operation:<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMonday-Friday |  09:00 - 24:00<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWeekends |  09:00 - 01:00<br>
    </p>
 </div>
 <div class="row" style="background-color:cadetblue;">
        <h4><center>Write To Us</center></h4>
        <table class="table" align="center">
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMobile No</td>
                <td><input type="number" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubject</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDescription</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-dark">SUBMIT</button></td>
            </tr>
        </table>
     </div>
    </body>
    </html>