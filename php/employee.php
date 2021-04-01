<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "job_portaldb";
$conn = mysqli_connect ($servername, $username, $password);
mysqli_select_db($conn, "$dbname");
if (isset ($_POST ["submit"]))
{
    $username = $_POST['email'];
    
    $password = $_POST['password'];
  
   // print_r($_POST); // check garne ho 

  $sql = "INSERT INTO employee ('id', 'email', 'password' ) values ('0', '$username','$password')";


   
 //die();
  mysqli_query ($conn, $sql);
   echo"Record added successfully";


}
?>