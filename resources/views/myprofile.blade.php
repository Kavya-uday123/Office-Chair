<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
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
                <a class="nav-link active" aria-current="page" href="/chairedit">Edit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairview">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/chairdelete">Delete</a>
              </li>
            </ul>
              
              <button class="btn btn-success btn-md float-end" onclick="location.href='{{ url('/logout') }}'">
     Logout</button>
          </div>
        </div>
      </nav>
      <br>

      <?php
if(isset($Name))
{
    echo "<h2 style='color:blue'>Welcome ".$Name ."</h2>";
}
?> 

      <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>
</body>
</html>