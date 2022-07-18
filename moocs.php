<?php
session_start();

if(!isset($_SESSION['email']))
        {
            header('location:userlogin.php');
            exit;
        }
?>
<!DOCTYPE html>
<html lang="en">
  <title>Upload MOOC's</title>
<link rel = "icon" type = "image/png" href = "/logo.png">
<head>
<meta charset="utf-8">
<meta name="keywords" content="example, JavaScript Form Vadivdation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Vadivdation using a sample registration form. " />
<divnk rel='stylesheet' href='js-form-vadivdation.css' type='text/css' />
<script src="sample-registration-form-vadivdation.js"></script>
     <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
body {
  background-image: url('bcrec3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
</head>
<body>
  <ul>
    <li><a class="active" href="home.html" style="text-decoration:none;display:inline-block; color: white;">Home</a></li>
    <li><a href="https://www.makautwb.ac.in/datas/users/0-mar%20notice%20vc%20final.pdf"style="text-decoration:none;display:inline-block; color: white;">Mar & Moocs Details</a></li>
    <li style="float:right"><a href="logout.php" style="text-decoration:none;display:inline-block; color: white;">Logout</a></li>
    <li style="float:right"><a href="mar.php"style="text-decoration:none;display:inline-block; color: white;">Mar</a></li>   
  </ul>
    <div style=" background:rgba(255, 255, 255,.7) ;padding: 20px;margin: 50px;">
    <br>
<h1 align="center">Upload Moocs Document</h1>
<br>

<form name='registration' >



<br>
<div class="form-group">
  <label for="roll">Roll no.</label>
  <input type="text" class="form-control" id="roll">
</div>
<br>

<br>

<div class="dropdown">
  <label for="">Choose Sem</label>
  <select name="yr" id="yr"  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
  <option value="5th">5th</option>
  <option value="6th">6th</option>
  <option value="7th">7th</option>
  <option value="8th">8th</option>
</select>
</div>
<br>

<div class="form-group">
    <label for="formFileMultiple">Click to upload files</label>
    <br>

    <input type="file" id="formFileMultiple" multiple>
    <script>
        function fileValidation(){
    var fileInput = document.getElementById('formFileMultiple');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload only .jpeg/.jpg/.png/.pdf/.doc/.docx file.');
        fileInput.value = '';
        return false;
         }
        }
    </script>
  </div>

  <br>
<button type="button" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>