<?php
if(isset($_POST['login_btn'])){
  if(empty($_POST['email'])){
    echo'Email is requred <br />';
  }
  echo htmlspecialchars($_POST['email']);
}

?>

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
            exit();
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
<html>
<head>
	<title>smartRent login</title>
	<link rel="stylesheet" type="text/css" href="admin/css/css/bootstrap.css">
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                <h3 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login Here</h3>
                <?php
                  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                  {
                      echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                      unset($_SESSION['status']);
                  }
                
                ?>

                <form class="mx-1 mx-md-4"action="login.php"  method="POST" >

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                 
                      <label for="username" 
		           class="form-label">Email Address</label>
            
		    <input type="text" 
		           class="form-control" 
		           name="email" 
		           >
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                   
                      <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="passwords" 
		           class="form-control" 
		           >
                    </div>
                  </div>

                 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <button name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="asset\image\smatcontact.png" alt="Smartrent" width="500" height="500">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>