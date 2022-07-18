<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <link rel = "icon" type = "image/png" href = "/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
body {
  background-image: url('bcrec3.jpg');
  background-size: cover;
}
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
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 0px;
  vertical-align: middle;
}
.app-button{
    background-color: #00135f;
    border-radius: 20px;
    width: 150px;
    margin:0 20px;
    display:inline-block;
    line-height: 60px;
}
.container{
text-align: center;
width: 300px;
height: 200px;
padding-top: 700px;
}

.buttonarea .row{
  text-align:center;
  /*the same margin which is every button have, it is for small screen, and if you have many buttons.*/
  margin-left:-20px;
  margin-right:-20px;
  margin: 50px 600px;
}
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="index.php"style="text-decoration:none;display:inline-block; color: white;">Home</a></li>
        <li><a href="https://www.makautwb.ac.in/datas/users/0-mar%20notice%20vc%20final.pdf"style="text-decoration:none;display:inline-block; color: white;">Mar & Moocs Details</a></li>
        <li><a href="http://makautexam.net/"style="text-decoration:none;display:inline-block; color: white;">MAKAUT</a></li>
        <li style="float:right"><a href="#about"style="text-decoration:none;display:inline-block; color: white;">About</a></li>  
      </ul>
      <br>
      <br>
      <br>
      <h1 style="text-align:center;color: #00135f;">Welcome User</h1>

<div class="buttonarea"> 
    <div class="row">
        <a type="submit" class="app-button" id="btn" onclick="formvalidation()" href="userlogin.php" style="text-decoration:none;display:inline-block;color: white;">Login</a>
      </div>
</div>
</body>
</html>
