<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "job_portaldb";
$con = mysqli_connect ($servername, $username, $password);
mysqli_select_db($con, "$dbname");
if (isset ($_POST ["Submit"]))
{
    $fullname = $_POST['fname'];
    $contact = $_POST['cnum'];
    $resume = $_POST['myfile'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
  
   // print_r($_POST); // check garne ho 

  $sql = "INSERT INTO jobseeker ( 'ID','fullname', 'contact', 'resume', 'email', 'password' ) values ('0', '$fullname','$contact','$resume','$email','$password')";


   
 //die();
  mysqli_query ($con, $sql);
   echo"Record added successfully";


}
?>