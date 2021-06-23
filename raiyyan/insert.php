

<?php

include('db.php');




  


$name = $_POST['phpname'];
$email = $_POST['phpemail'];
$mobile = $_POST['phpmobile'];



$insertdata = "INSERT INTO raiyyan(name, email, mobile) VALUES('{$name}', '{$email}', '{$mobile}') ";

$query = mysqli_query($con, $insertdata);


/*if (mysqli_query($con, $insertdata)) {

  echo 1;
  
}

else {
	echo 0;
}*/




 ?>






 ?>




 
