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






 <div class="container">

        <div class="col-lg-3">

   <form id="tableform">
       <legend>Ajax Form (Post & Get)</legend>
      <input type="text" name="name" id="fname" class="form-control" placeholder="Name">
      <input type="email" name="email" id="femail" class="form-control" placeholder="Email">
      <input type="text" name="mobile" id="fmobile" class="form-control" placeholder="Mobile">
      <input class="btn btn-primary btn-block" type="submit" name="submit" id="savebtn" value="Submit">
    </form>
        </div>

      <div class="col-lg-4">
         <legend>Simple Get Data (View) - Refresh</legend>
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
      </div>
      <div class="col-lg-4">
        <legend>Ajax Get Data (View)</legend>
        <tbody>
          
          <!-- <div class="cl">Click</div> -->
          <br>
          <div class="show">Show</div>
        </tbody>
      </table>
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

  <style>
    
    .form-control { margin: 10px 0px; }

  </style>
</body>
</html>