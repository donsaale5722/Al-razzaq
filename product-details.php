
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
   include 'conn.php';
    if(isset($_GET['product_id'])){
       $mysql = "SELECT * FROM `product_insert_data_table` WHERE id = '".$_GET['product_id']."'";
       $result = mysqli_query($conn, $mysql);
    }
    
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Al-RazzaQ | Mobile Store </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       .plus-minus-input {
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}

.plus-minus-input .input-group-field {
  text-align: center;
  margin-left: 0.5rem;
  margin-right: 0.5rem;
  padding: 1rem;
}

.plus-minus-input .input-group-field::-webkit-inner-spin-button,
.plus-minus-input .input-group-field ::-webkit-outer-spin-button {
  -webkit-appearance: none;
          appearance: none;
}

.plus-minus-input .input-group-button .circle {
  border-radius: 50%;
  padding: 0.25em 0.8em;
}
    </style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  --> 
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>Alrazzaq003@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+91 8000568886</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="add_to_card.php"><i class="fa fa-cart-shopping" style="color:#fff;"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Al-RAZZAQ<em> Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="checkout.php">Checkout</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
              
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.php">About Us</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div>
            <ul class="big">
            <li><a href="add_to_card.php"><i class="fa fa-cart-shopping" style="color: #fff;
    margin-left: 360px;
    font-size: 34px;"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
<?php
       while($row = mysqli_fetch_array($result)){

    ?>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><small><del><sup>$</sup><?php echo $row['old_price'];?></del></small> &nbsp; <sup>$</sup><?php echo $row['new_price'];?></h1>
            <span>
                Lorem ipsum dolor sit amet.
            </span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
              <img src="<?php echo 'admin_dashboard/upload/'.$row['product_1'];?>" alt="" class="img-fluid wc-image">
            </div>

            <br>

            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="<?php echo 'admin_dashboard/upload/'.$row['product_2'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="<?php echo 'admin_dashboard/upload/'.$row['product_3'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="<?php echo 'admin_dashboard/upload/'.$row['product_4'];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h4><?php echo $row['product_name'];?></h4>
              </div>
              <br><br>
              <div class="content">
                <p><?php echo $row['product_specification'];?></p>
              </div>
            </div>

            <br>
            <br>
          
            <h4>Add to Cart</h4>

            <br>

            
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">ADITIONAL</label>
                    <select class="form-control">
                      <option value="0">COVER</option>
                      <option value="0">TUFON</option>
                      
                    </select>
                  </div>
                </div>
              </div>
              <form action="" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
<div class="container py-4">
    <div class="row">
        <div class="mx-auto">
            <div class="input-group">
                <span class="input-group-prepend">
                    <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant">
                        <span class="fa fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant" class="form-control input-number" value="1" min="1" max="10">
            
                <span class="input-group-append">
                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant">
                        <span class="fa fa-plus"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-success" name="add">Add to card</button>
                </div>
              </div>
            </form>
             <?php
                include 'conn.php';
                if(isset($_POST['add'])){

                   $customer_id = 12;  
                   $product_id = $_GET['product_id'];
                   $product_1 = $row['product_1'];
                   $product_name = $row['product_name'];
                   $product_unit_price = $row['new_price'];
                   $status = 0;

                   $product_quantity = $_POST['quant'];

                   $product_total_price = $product_quantity * $product_unit_price;

                   $add_to_card_product = "INSERT INTO `customer_add_to_card_table`(`customer_id`, `product_1`, `product_id`, `status`, `product_name`, `product_unit_price`, `product_total_price`, `product_quantity`) VALUES ('$customer_id', '$product_1', '$product_id', '$status', '$product_name', '$product_unit_price', '$product_total_price', '$product_quantity')"; 
                   $res = mysqli_query($conn, $add_to_card_product); 
                   if ($res) {
                     echo "<script>Swal.fire({
                             position: 'top-end',
                             icon: 'success',
                             title: 'Your order added to card! check card page',
                             showConfirmButton: false,
                             timer: 1500
                           });</script>";
                   }
                   else{
                     echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            });</script>";
                   }
                }
             ?>
            <br>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
<?php
       }
?>
    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Mobile Store</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">Vivamus ut tellus mi</a></li>
              <li><a href="#">Nulla nec cursus elit</a></li>
              <li><a href="#">Vulputate sed nec</a></li>
              <li><a href="#">Cursus augue hasellus</a></li>
              <li><a href="#">Lacinia ac sapien</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">Products</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Terms</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 Company Name
                - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>

    <script> 
        $('.btn-number').click(function(e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function() {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});

$(".input-number").keydown(function(e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
    </script>
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>