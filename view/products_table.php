
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
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
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

<!-- Palmers Table Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center float-right mb-4">
                    
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productmodal">
  Add New Product
</button>
                    </div>
                    <br>
                      <br>
                      <br>

<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="../actions/product_actions.php" class="row g-3">
  <div class="col-md-6">
    <label for="product_title" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="name" name="product_title">
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">Price</label>
    <input type="tel" class="form-control" id="price"  name="price">
  </div>
  <div class="col-12">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="img" name="img">
  </div>
  <div class="col-12">
  <label for="keywords" class="form-label">Keywords</label>
  <input type="text" class="form-control" id="key" name="key">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name= "addProduct">Add</button>
      </div>

      </form>

    </div>
  </div>
</div>

<section id="Products_Palmer">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Palmers</h2></div>


<?php

require ('../controllers/product_controller.php');

$palmers = viewAllPalmersController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $palmers as $row ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row["product_id"] ?></td>
      <td><?php echo $row["product_name"] ?></td>
      <td><?php echo $row["product_price"] ?></td>
      <td><?php echo $row["product_desc"]; ?></td>
      <td><?php echo $row["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input type="hidden" name="palmedit" value="<?php echo $row['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="palmeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="palmdel" value="<?php echo $row['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="palmdelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>       
      </section>    
<br>
<br>
<br>
<br>

<section id="products_cerave">

<!-- Cerave Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Cerave</h2>
    </div>
<?php


$cerave = viewAllCeraveController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $cerave as $row1 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row1["product_id"] ?></td>
      <td><?php echo $row1["product_name"] ?></td>
      <td><?php echo $row1["product_price"] ?></td>
      <td><?php echo $row1["product_desc"]; ?></td>
      <td><?php echo $row1["product_keywords"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input hidden  name="ceraedit" value="<?php echo $row1['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="ceraeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="ceradel" value="<?php echo $row1['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="ceradelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>

<section id="products_tea">



<!-- Tea Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Tea</h2>
    </div>
<?php


$tea = viewAllTeaController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $tea as $row2 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row2["product_id"] ?></td>
      <td><?php echo $row2["product_name"] ?></td>
      <td><?php echo $row2["product_price"] ?></td>
      <td><?php echo $row2["product_desc"]; ?></td>
      <td><?php echo $row2["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input type="hidden" name="teaedit" value="<?php echo $row2['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="teaeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="teadel" value="<?php echo $row2['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="teadelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>

<section id="products_cetaphil">


<!-- Cetaphil Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Cetaphil</h2>
    </div>
<?php


$cetaphil = viewAllCetaphilController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $cetaphil as $row3 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row3["product_id"] ?></td>
      <td><?php echo $row3["product_name"] ?></td>
      <td><?php echo $row3["product_price"] ?></td>
      <td><?php echo $row3["product_desc"]; ?></td>
      <td><?php echo $row3["product_keywords"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input type="hidden" name="cetaedit" value="<?php echo $row3['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="cetaeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="cetadel" value="<?php echo $row3['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="cetadelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>


<section id="products_mgl">


<!-- MGL Naturals Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - MGL</h2>
    </div>
<?php


$mgl = viewAllMglController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $mgl as $row4 ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row4["product_id"] ?></td>
      <td><?php echo $row4["product_name"] ?></td>
      <td><?php echo $row4["product_price"] ?></td>
      <td><?php echo $row4["product_desc"]; ?></td>
      <td><?php echo $row4["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input type="hidden" name="mgledit" value="<?php echo $row4['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="mgledit" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="mgldel" value="<?php echo $row4['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="mgldelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           

    </section>


</div>
            <!-- End of Main Content -->


    <?php
    include('../includes/scripts.php');
    include('../includes/footer.php');


?>





