<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <?php include "headers.php"; ?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form class="tm-edit-product-form" method="post" name="login">
                 
                  <div class="form-group mb-12">
                    <label
                      for="title"
                      >Product title
                    </label>
                    <input
                      id="name"
                      name="title"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                  <div class="form-group mb-12">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name="description"
                      required
                    ></textarea>
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="maker"
                      >Product maker
                    </label>
                    <input
                      id="name"
                      name="maker"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="department"
                      >Department
                    </label>
                    <input
                      id="name"
                      name="department"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="testing"
                      >Product testing
                    </label>
                    <input
                      id="name"
                      name="testing"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="code"
                      >Product code
                    </label>
                    <input
                      id="name"
                      name="code"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                 
                        
                  </div>
                  
              </div>
              <!-- <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div> -->
              <div class="col-12">
                <button type="submit" name="add" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>



<?php

include("config.php");

if(isset($_POST['add']))
{
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $maker = $_POST['maker'];
  $depart = $_POST['department'];
  $testing = $_POST['testing'];
  $code = $_POST['code'];

  $query="INSERT INTO `products`(`title`, `description`, `maker`, `department`, `testing`, `p_code`) VALUES ('{$title}','{$desc}','{$maker}','{$depart}','{$testing}','{$code}')";
  $result=mysqli_query($conn,$query);
  if($result){
    echo '<script>alert("Hurry! Product Added...")</script>';
    // header("location:http://localhost/eprojects/products.php");
  }else{
    echo "sorry";
  }
 
}

error_reporting(0);


?>

































            </div>
          </div>
        </div>
      </div>
    </div>
 <?php include("footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
