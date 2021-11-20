
<?php
//check if login session exit
include('../settings/core.php');

    check_login();

include('../includes/header.php');
include('../includes/navbar.php');


?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["email"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Payments Recorded</h1>
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymodal">
  Add New
</button>
                    </div>


<!-- Modal -->
<div class="modal fade" id="paymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Payment/h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="../actions/payment_actions.php" class="row g-3">
  <div class="col-md-6">
    <label for="cid" class="form-label">Customer ID</label>
    <input type="tel" class="form-control" id="cid" name="cid">
  </div>
  <div class="col-md-6">
    <label for="currency" class="form-label">Currency</label>
    <input type="text" class="form-control" id="cur"  name="cur">
  </div>
  <div class="col-12">
    <label for="amt" class="form-label">Amount</label>
    <input type="tel" class="form-control" id="amt" name="amt">
  </div>
  <div class="col-12">
  <label for="orderid" class="form-label">Order Id</label>
  <input type="tel" class="form-control" id="orderid" name="orderid">
  </div>
  <div class="col-md-6">
    <label for="date" class="form-label">Payment Date</label>
    <input type="text" class="form-control" id="date" name="paydate">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name= "addPay">Add</button>
      </div>

      </form>

    </div>
  </div>
</div>
<?php

require ('../controllers/payment_controller.php');

$payment = viewAllPaymentController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Currency</th>
      <th scope="col">Amount</th>
      <th scope="col">Order ID</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $payment as $row ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row["pay_id"] ?></td>
      <td><?php echo $row["customer_id"] ?></td>
      <td><?php echo $row["currency"]; ?></td>
      <td><?php echo $row["amt"]; ?></td>
      <td><?php echo $row["order_id"] ?></td>
      <td><?php echo $row["payment_date"] ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/payment_actions.php" method="post">
                        <input type="hidden" name="payedit" value="<?php echo $row['pay_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="payeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/payment_actions.php" method="post">
                <input type=hidden name="paydel" value="<?php echo $row['pay_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="paydelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>    


</div>
            <!-- End of Main Content -->


    <?php
    include('../includes/scripts.php');
    include('../includes/footer.php');


?>





