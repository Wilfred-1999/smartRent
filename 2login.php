<?php
   
   session_start();
   
   $link = mysqli_connect('localhost', 'root','', 'srental');

   if(!$link)
    {
		echo mysqli_connect_error();
	}

    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $fullname = $_POST['fullname'];

        $query =  "SELECT * FROM tenabus WHERE email='$email' AND password='$passwords'";
        $query_run = mysqli_query($link, $query);
         $companyname = mysqli_fetch_array($query_run);
        if($companyname['usertype'] == "tenant")
        {
            $_SESSION['username'] = $email;
            
            header('Location: tenant/tenantdashboard.php');
            exit();
            header('Location: tenant/tenantcontract.php');
            exit();
            header('Location: tenant/tenantinfo.php');
            exit();
            header('Location: tenant/tenantpay.php');
            exit();
         
            
        }

        else if($companyname['usertype'] == "admin")
        {
            $_SESSION['username'] = $email;
            header('Location: admin/index.php');
            header('Location: admin/house.php');
            header('Location: admin/tenabus.php');
            header('Location: admin/contract.php');
        }
        else 
        {
            $_SESSION['status'] = 'Email id / Password is Invalid';
            header('Location: login.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body>
<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded" action="login.php"  method="POST"  style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>

                <?php
                  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                  {
                      echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                      unset($_SESSION['status']);
                  }
                
                ?>
          
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">Email Address</label>
            
		    <input type="text" 
		           class="form-control" 
		           name="email" 
		           >
		  </div>
         
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="passwords" 
		           class="form-control" 
		           >
		  </div>
		  
		 <br>
        
         <button name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
		</form>
      </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
