<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aranoz</title>
    <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
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
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairview">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/stockview">Stock View</a>
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
      <br> <br> <br>
<br> <div id="divToPrint">

  
    <div class="container">
        <div class="row">
        <h2 align="center" style="color:grey">Registered Users List</h2>
            <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> -->
            <table class="table" style="background-color:#C0C0C0;width:100%;border:1px solid black"  >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Address</th>
        <th>Pincode</th>
        <th>State</th>
        <th>Created at</th>
    </tr>
    <?php if(isset($data))
    {
    foreach($data as $row)
    {
    ?>
    <tr>
        <td><?php  echo $row->id ?></td>
        <td><?php  echo $row->Name ?></td>
        <td><?php  echo $row->Phone ?></td>
        <td><?php  echo $row->Email ?></td>
        <td><?php  echo $row->Address ?></td>
        <td><?php  echo $row->Pincode ?></td>
        <td><?php  echo $row->State ?></td>
        <td><?php  echo $row->	created_at ?></td>
     
       
    </tr>
<?php 
    }
    }
?>
    </table>

            <!-- </div> -->
          
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>  </div>
    
    <center> <input type="button" value="print" onclick="PrintDiv();" /></center>
</body>
</html>

