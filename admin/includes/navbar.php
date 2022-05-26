<?php
      
      include('../tenant/security.php');
   ?>
 
 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class=""></i>
    </div>
    <h2><div class="sidebar-brand-text mx-3">smartRent </div></h2>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="house.php">
    <i class="fas fa-fw fa-home"></i>
    <span>Houses</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="tenabus.php">
    <i class="fas fa-fw fa-user"></i>
    <span>Tenants</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="contract.php">
    <i class="fas fa-fw fa-clipboard-list"></i>
    <span>Contracts</span></a>
</li>
<!-- Nav Item - Utilities Collapse Menu -->

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="payment.php">
    <i class="fa fa-credit-card"></i>
    <span>Payments</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fas fa-fw fa-bell"></i>
    <span>Report problem</span></a>
</li>

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->

<!-- Nav Item - Charts -->


<!-- Nav Item - Tables -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <form action="logout.php" method="POST">
                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
