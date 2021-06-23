<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "raiyyan";


$con = mysqli_connect($server, $username, $password, $db);

if ($con) {

  echo 'Connected';
  
}

else {
  echo 'Not Connected';
}

 ?>


 





