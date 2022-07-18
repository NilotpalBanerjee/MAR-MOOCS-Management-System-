<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "mmdb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


if (!$conn) 
{   
    echo " Joining unsuccessful 😔";
}
if ($conn) 
{
        echo " Welcome 😊";
} 
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phno=$_POST["phno"];
$email=$_POST["email"];
$roll=$_POST["roll"];
$year=$_POST["year"];
$sem=$_POST["sem"];
$check="SELECT * FROM register WHERE email = '$email'";
$rs = mysqli_query($conn,$check);
$data = mysqli_num_rows($rs);
if($data >= 1) 
    {
        echo "email  Already in Exists <br/>";
    }
    else
        {
            $checke="SELECT * FROM register WHERE roll = '$roll'";
            $rse = mysqli_query($conn,$checke);
            $datae = mysqli_num_rows($rse);
            if($datae >= 1) 
            {
                echo "Roll No Already in Exists <br/>";
            }
	    
            else
            {
                $query="INSERT INTO register(fname, lname, phno, email, roll, year, sem) VALUES ('$fname','$lname','$phno','$email','$roll','$year','$sem')";
                $rs = mysqli_query($conn,$query);
                if (!$query) 
                    {
                        echo "Register Unsuccessful ";
                    }
                if ($query) 
                    {
                        echo "<br>";
                        echo  "Register Successful ";
                        header("location: welcome.php");

                    }
                }
            }
                        
?>