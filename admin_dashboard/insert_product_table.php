   <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
    include '../conn.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:../admin_login.php');
    }
  ?>
  <?php
      $mysql = "SELECT * FROM `product_insert_data_table`";
      $result = mysqli_query($conn, $mysql);
      
  ?>
  <!doctype html>
  <html lang="en">
   
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
      <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/libs/css/style.css">
      <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
      <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
      <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
      <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
      <title>Al-RazzaQ / Admin_Dashboard</title>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

  <body>
      <!-- ============================================================== -->
      <!-- main wrapper -->
      <!-- ============================================================== -->
      <div class="dashboard-main-wrapper">
          <!-- ============================================================== -->
          <!-- navbar -->
          <!-- ============================================================== -->
          <div class="dashboard-header">
              <nav class="navbar navbar-expand-lg bg-white fixed-top">
                  <a class="navbar-brand" href="index.php">Al-RazzaQ</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto navbar-right-top">
                          <li class="nav-item">
                              <div id="custom-search" class="top-search-bar">
                                  <input class="form-control" type="text" placeholder="Search..">
                              </div>
                          </li>
                          
                          <li class="nav-item dropdown nav-user">
                              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                              <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                  <div class="nav-user-info">
                                      <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                      <span class="status"></span><span class="ml-2">Available</span>
                                  </div>
                                  <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
          <!-- ============================================================== -->
          <!-- end navbar -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- left sidebar -->
          <!-- ============================================================== -->
          <div class="nav-left-sidebar sidebar-dark">
              <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="d-xl-none d-lg-none" href="./index.php">Dashboard</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav flex-column">
                              <li class="nav-divider">
                                  Menu
                              </li>
                              <li class="nav-item">
                                  <!-- <a class="nav-link" href="index.php" data-toggle="collapse" aria-expanded="false"><i class="fas fa-fw fa-user-circle"></i>Dashboard</a> -->
                                  <a class="nav-link" href="index.php" data-toggle="collapse" aria-expanded="true"><i class="fas fa-fw fa-user-circle"></i>Dashboard</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Tables</a>
                                  <div id="submenu-2" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">Customer-Contact Table<span class="badge badge-secondary">New</span></a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">Customer-Order Table</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" href="#">Customer-Order-confirm Table</a>
                                          </li>
                                          
                                      </ul>
                                  </div>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Insert-Tables</a>
                                  <div id="submenu-3" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="insert_product_table.php">Product-Insert Table</a>
                                          </li>
                                          
                                          
                                      </ul>
                                  </div>
                              </li>
                              
                      </div>
                  </nav>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- end left sidebar -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- wrapper  -->
          <!-- ============================================================== -->
          <div class="dashboard-wrapper">
              <div class="dashboard-ecommerce">
                  <div class="container-fluid dashboard-content ">
                      <!-- ============================================================== -->
                      <!-- pageheader  -->
                      <!-- ============================================================== -->
                      <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="page-header">
                                  <h2 class="pageheader-title">Al-Razzaq E-commerce Dashboard</h2>
                                 
                                  <div class="page-breadcrumb">
                                      <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                              <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                              <li class="breadcrumb-item active" aria-current="page">Al-Razzaq E-commerce Dashboard</li>
                                          </ol>
                                          <div class="container" style="text-align: right; margin-top:-23px;">
                        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#form">
                        Add Credit/Debit
                        </button>
                      </div>
                      <!-- Model Start -->
                      <!-- <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                              <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                
                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Product Image-1</label>
                                    <input type="file" name="product_image_1" id="product_image_1">
                                  </div>

                                  <div class="col-md-3">
                                    <label>Product Image-2</label>
                                    <input type="file" name="product_image_1" id="product_image_1">
                                    
                                  </div>
                                </div>

                              <div class="modal-footer border-top-0 d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn btn-success">ADD</button>
                              </div>
                              </form>
                              
                                      </nav>
                                  </div>
                              </div>
                          </div>
                      </div> -->


                      <div class="modal" id="form" tabindex="-1" role="dialog">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
                              </div>

                              <div class="col-md-6">
                                <label>Old Product Price</label>
                                <input type="text" class="form-control" name="old_product_price" id="old_product_price" placeholder="Enter Old Product Price" required>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-md-6">
                              <label>New Product Price</label>
                              <input type="text" class="form-control" name="new_product_price" id="new_product_price" placeholder="Enter New Product Price" required> 
                              </div>

                              <div class="col-md-6">
                              <label>IMEI Product Number</label>
                              <input type="text" class="form-control" name="imei_product_number" id="imei_product_number" maxlength="20" placeholder="Enter IMEI Number" required> 
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-md-12">
                                <label>Product Specification</label>
                                <textarea type="text-area" class="form-control" name="product_specification" id="product_specification" placeholder="Enter Product Specification" required></textarea> 
                              </div>
                             </div>

                             <div class="row mt-3">
                              <div class="col-md-6">
                                <label>Product Image-1</label>
                                <input type="file" class="form-control" name="image1" id="product_image_1" required>                              
                              </div>
                              <div class="col-md-6">
                                <label>Product Image-2</label>
                                <input type="file" class="form-control" name="image2" id="product_image_2" required>                              
                              </div>
                            </div>

                              <div class="row mt-3">
                                <div class="col-md-6">
                                  <lable>Product Image-3</lable>
                                  <input type="file" class="form-control" name="image3" id="product_image_3" required>
                                </div>
                                <div class="col-md-6">
                                  <lable>Product Image-4</lable>
                                  <input type="file" class="form-control" name="image4" id="product_image_4" required>
                                </div>
                                
                              </div>
                            </div>

                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>

                      <!-- Model End -->                                                                                                                                                                                                                                                                                                              
                       <div class="container">
                           <table class="table table-responsive align-middle mb-0 bg-white" style="width:1700px;">
                      <thead class="bg-light">
                        <tr>
                          <th style="width:150px;">Product-image-1</th>
                          <th style="width:150px;">Product-image-2</th>
                          <th style="width:150px;">Product-image-3</th>
                          <th style="width:150px;">Product-image-4</th>
                          <th style="width:150px;">Product-name</th>
                          <th style="width:150px;">Product-old-price</th>
                          <th style="width:150px;">Product-new-price</th>
                          <th style="width:150px;">Product-specification</th>
                          <th style="width:150px;">Product-Imei-No</th>
                          <th style="width:150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>

    <?php
       while($row = mysqli_fetch_array($result)){
           ?>
      <tr>
      
        <td>
          <div class="d-flex align-items-center">
            <img
                src="<?php echo 'upload/'.$row['product_1'];?>"
                alt=""
                style="width: 65px; height: 65px;"
             
                />
          </div>
        </td>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="<?php echo 'upload/'.$row['product_2'];?>"
                alt=""
                style="width: 65px; height: 65px"
                
                />
          </div>
        </td>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="<?php echo 'upload/'.$row['product_3'];?>"
                alt=""
                style="width: 65px; height: 65px"
          
                />
          </div>
        </td>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="<?php echo 'upload/'.$row['product_4'];?>"
                alt=""
                style="width: 65px; height: 65px"

                />
          </div>
        </td>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['old_price'];?></td>
        <td><?php echo $row['new_price'];?></td>
        <td><?php echo $row['product_specification'];?></td>
        <td><?php echo $row['product_imei_no']?></td>
        <td>
          <a href="#"><i class="fa fa-pen" style="color: blue;"></i></a>
          &nbsp;&nbsp;&nbsp;
          <!-- <input type="submit" class="btn" name="delete-product" onclick="deleteFunction()"><i class="fa fa-trash" style="color: red;"></i> -->
          <a href=""><i class="fa fa-trash"  onclick="delete_function()" style="color: red;"></i></a>
        </td>
       
      </tr>
       <?php
        }
        ?>
    </tbody>
  </table>
                       </div>


                       <?php
                                  include '../conn.php';
                                  if(isset($_POST['submit'])){

                                      // print_r($_POST);
                                         
                                         $product_name = $_POST['product_name'];
                                         $product_old_price = $_POST['old_product_price'];
                                         $product_new_price = $_POST['new_product_price'];
                                         $product_imei_no = $_POST['imei_product_number'];
                                         $product_specification = $_POST['product_specification'] ;
                                         $file_1 = $_FILES['image1']['name'];
                                         $file_2 = $_FILES['image2']['name'];
                                         $file_3 = $_FILES['image3']['name'];
                                         $file_4 = $_FILES['image4']['name'];
                                         $upload_path = "./upload/";
                                         $target_file1 = $upload_path . basename($file_1);
                                         $target_file2 = $upload_path . basename($file_2);
                                         $target_file3 = $upload_path . basename($file_3);
                                         $target_file4 = $upload_path . basename($file_4);


                                         // $ddd = move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
                                         move_uploaded_file($_FILES['image1']['tmp_name'],"./upload/".$file_1);
                                         move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
                                         move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
                                         move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4);
                                         



                                         $sql_img = $conn->query("INSERT INTO `product_insert_data_table`(`product_1`, `product_2`, `product_3`, `product_4`, `product_name`, `old_price`, `new_price`,`product_imei_no`, `product_specification`) VALUES ('$file_1', '$file_2', '$file_3', '$file_4', '$product_name', '$product_old_price', '$product_new_price','$product_imei_no', '$product_specification')");


                                         if($sql_img){
                                             echo '<script>swal("Good job!", "Your product inserted successfull!", "success");</script>';
                                            
                                         }
                           
                                  }
                              ?>

                              

                             
      <!-- ============================================================== -->
      <!-- Optional JavaScript -->
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      
      <!-- jquery 3.3.1 -->
      <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
      <!-- bootstap bundle js -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
      <!-- slimscroll js -->
      <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
      <!-- main js -->
      <script src="assets/libs/js/main-js.js"></script>
      <!-- chart chartist js -->
      <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
      <!-- sparkline js -->
      <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
      <!-- morris js -->
      <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
      <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
      <!-- chart c3 js -->
      <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
      <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
      <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
      <script src="assets/libs/js/dashboard-ecommerce.js"></script>
  </body>
<script>
                             

                              function delete_function() {
                                 alert('hoooooo');
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    header("location: delete.php");
    alert('hiiii');
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});



//         swal({
//   title: "Are you sure?",
//   text: "But you will still be able to retrieve this file.",
//   type: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#DD6B55",
//   confirmButtonText: "Yes, archive it!",
//   cancelButtonText: "No, cancel please!",
//   closeOnConfirm: false,
//   closeOnCancel: false },
// function(isConfirm){
//   if (isConfirm) {
//     alert('delete');         // submitting the form when user press yes
//   } else {
//     swal("Cancelled", "Your imaginary file is safe :)", "error");
//   }
// });



                                }

                              </script>
   
  </html>                 