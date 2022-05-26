<?php
      
   include('security.php');
?>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="tenantdashboard.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class=""></i>
    </div>
    <div class="sidebar-brand-text mx-3"> smartRent </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="tenantdashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Contract Menu -->

<li class="nav-item">
    <a class="nav-link" href="tenantcontract.php">
        <i class="fa fa-clipboard-list"></i>
        <span>MY CONTRACT</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<li class="nav-item">
    <a class="nav-link" href="tenantpay.php">
        <i class="fa fa-wallet"></i>
        <span>MY PAYMENT</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Profile Menu -->

<li class="nav-item">
    <a class="nav-link" href="tenantinfo.php">
        <i class="fas fa-user"></i>
        <span>MY PROFILE</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">




<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
               
                   <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <form action="logout.php" method="POST">
                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
