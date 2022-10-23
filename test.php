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
  <?php include("headers.php");
        include("config.php"); 
  ?>
  <?php 
  $query = "SELECT `title` , `description` , `maker` , `department` , `p_code` FROM `products`";
  $result = mysqli_query($conn,$query);
  if(!$result){
    echo "error";
  }  
  ?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-8 col-sm-8 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">

        





                <h2 class="tm-block-title d-inline-block">Test your Products here!</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                <form class="tm-edit-product-form" method="post" name="login">
                 
                  <div class="form-group mb-12">
                    <label
                      for="title"
                      >Tester Name
                    </label>
                    <input
                      id="name"
                      name="tester_name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
                  <div class="form-group mb-12">
                    <label
                      for="description"
                      >Remarks</label
                    >
                    <input
                      class="form-control validate"
                      rows="3"
                      name="Remarks"
                      required
                    ></input>
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="maker"
                      >Result
                    </label>
                    <input
                      id="name"
                      name="results"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="department"
                      >Status
                    </label>
                    <input
                      id="name"
                      name="status"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-12">
                    <label
                      for="testing"
                      >type of testing
                    </label>
                    <input
                      id="name"
                      name="testing"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>                      
                  </div>                 
            </div>            
              <div class="col-12">
                <button type="submit" name="add" class="btn btn-primary btn-block text-uppercase">Enter</button>
              </div>
            </form>
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
