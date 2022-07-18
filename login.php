<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "mmdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
session_start();

if (!$conn) 
    {
        echo " Joining unsuccessful";
    }

$email=$_POST["email"];
$roll=$_POST["roll"];

$check="SELECT * FROM register WHERE email='$email'";
$rs = mysqli_query($conn,$check);
$data=mysqli_fetch_assoc($rs);
$datap = mysqli_num_rows($rs);

if ($datap ==1) 
    {
        if($roll==$data["roll"])
        {
            $_SESSION["email"] = $data["email"];
            $_SESSION["roll"] = $data["roll"]; 
        
        if(isset($_SESSION['email']))
        {
            header('location:session.php');
            exit;
        }}
        elseif($roll!=$data["roll"])
            {
             echo "Unsuccessful";
             header('Location:userlogin.php');
             exit;
            }
    }
    else{
        echo "No Logs";
    }

?>

