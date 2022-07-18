<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <link rel = "icon" type = "image/png" href = "/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <style>
    
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #00135f;
}

li {
  float: left;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #f20909;
}
    .btn{
        margin-top:5px;
    }
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0px;
}
.bttn{
        display: inline-block;
        color: white;
        background-color:#00135f;
        border-radius: 15px;
        text-align: center;
        padding: 14px 16px;
        margin-right: 5px;
        margin-top: 3px;
        text-decoration: none;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0px;
}

.column img {
  margin-top: 0px;
  padding: 0px;
  vertical-align: middle;
}
  </style>
</head>
<body>

  <ul>
    <li><a class="active" href="index.html" style="text-decoration:none;display:inline-block; color: white;">Home</a></li>
    <li><a href="https://www.makautwb.ac.in/datas/users/0-mar%20notice%20vc%20final.pdf"style="text-decoration:none;display:inline-block; color: white;">Mar & Moocs Details</a></li>
    <li><a href="http://makautexam.net/"style="text-decoration:none;display:inline-block; color: white;">MAKAUT</a></li>
    <li style="float:right"><a href="#about"style="text-decoration:none;display:inline-block; color: white;">About</a></li>   
  </ul>
  <div class="row">
    <div class="col" style="background-color:white;"><img src="image\bcrec.jpg" style="width:100%" background="cover" ></div>
    <div class="col" style="background-color:white;display: flex;align-items: right;justify-content: center;">
        <div style="width: 400px;align-self: center; background-color: rgba(253, 253, 207, 0.7);padding: 0px;">
        <form class="form-horizontal" method="post" action="login.php" enctype="multipart/form-data" onsubmit="return validform()" name="myform">          
        <div class="form-group">
        <label for="email">Email:</label>        
          <input type="email" class="form-control" id="email" placeholder="Enter Your email Id" name="email" required>
          <script>
            function Valem(inputText)
            {
                var fileInput=document.getElementById('email');
              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if(inputText.value.match(mailformat))
                {}
              else
               {
                alert("You have entered an invalid email address!");
                fileInput.value='';
                return false;
               }
            }
          </script>
          </div>
        <div class="form-group">
            <label for="roll">Roll</label>
            <input type="number" class="form-control" id="roll" placeholder="Enter Your University Roll no" name="roll" required>
        </div>          
            <div class="form-group">            
                <button type="submit" class="bttn" id="btn" onclick="formvalidation()">Login</button>
                <button type="submit" class="bttn" id="btn" onclick="formvalidation()"><a href="userregister.php" style="text-decoration:none;display:inline-block;color:white;">Registration</a> </button>            
            </div>
            </div>
          </form>
          </div>
        </div> 
</body>
</html>


