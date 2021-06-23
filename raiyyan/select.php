





<?php

include ('db.php');


$viewtdata = "SELECT * FROM raiyyan";

$query = mysqli_query($con, $viewtdata);

// $result = mysqli_fetch_assoc($query);




while ($result = mysqli_fetch_assoc($query)) { ?>


  
  



    <tr>
      <th scope="row">1</th>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['mobile']; ?></td>
    </tr>
    






<?php }







 ?>




 
