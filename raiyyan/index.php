<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>






<div id="tableform">
 
<input type="text" name="name" id="fname" placeholder="Name">
<input type="email" name="email" id="femail" placeholder="Email">
<input type="text" name="mobile" id="fmobile" placeholder="Mobile">  
<input type="submit" name="submit" id="savebtn" value="Submit">


</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>



  <tbody>


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


if ($query) {

  echo 'This is Working';
  
}
else {
  echo 'Not Working';
}




 ?>




 

  </tbody>
</table>














<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>



 <script>
  
 $(document).ready(function() {

// $(".cl").on('click', function(e) {


function loadTable(){
$.ajax({
  url: 'select.php',
  type: 'POST',
  success: function(data){

$(".show").html(data);

  }
 
});

}

loadTable();


// });




$("#savebtn").on('click', function(e) {
  event.preventDefault();

var fname = $("#fname").val();
var femail = $("#femail").val();
var fmobile = $("#fmobile").val();

$.ajax({
  url: 'insert.php',
  type : 'POST',
  data : {phpname:fname, phpemail:femail, phpmobile:fmobile},
  success: function(data) {
loadTable();
  /*if (data == true) {


    }*/

   /* else{

alert("Not Inserted");
    }*/



  }

});





});
});

 </script>

 
 <div class="cl">Click</div>
 <br>
 <div class="show">Show</div>

</body>
</html>
