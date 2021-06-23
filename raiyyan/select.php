

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
<?php

include ('db.php');


$viewtdata = "SELECT * FROM raiyyan";

$query = mysqli_query($con, $viewtdata);

// $result = mysqli_fetch_assoc($query);




while ($result = mysqli_fetch_assoc($query)) { ?>





    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['mobile']; ?></td>
    </tr>
    






<?php }







 ?>
</table>



 
