<?php
   session_start();
   include('includes/header.php');
  

   include('../tenant/security.php');

   $link = mysqli_connect('localhost', 'root','', 'srental');

   if(!$link)
    {
		echo mysqli_connect_error();
	}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>smartRrent report</title>
  </head>
  <body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
                                               <th>Tenant Names</th>
                                               <th>occupaid House </th>
                                               <th> Duration</th>
                                               <th>Rent per Month</th>
                                               <th>total rent</th>
                                               <th>Bigining of contract</th>
                                               <th>End of contract</th>
                                               <th>Contract status</th>
          </tr>
        </thead>
        
        <?php 
             $query = "SELECT * from contracts";
      ?>
  <tbody>	

         <tr>
             <td><?php echo $row1['id']; ?></td>
             <td><?php echo $row1['tenantnames']; ?></td>
             <td><?php echo $row1['occupiedhouse']; ?></td>
             <td><?php echo $row1['timeduration']; ?></td>
             <td><?php echo $row1['monthrent']; ?></td>
             <td><?php echo $row1['totalrent']; ?></td>
             <td><?php echo $row1['beginingdate']; ?></td>
             <td><?php echo $row1['enddate']; ?></td>
             <td><?php echo $row1['contractstatus']; ?></td>
          </tr>

        </tbody>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>