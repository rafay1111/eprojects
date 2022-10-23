<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
  <?php include("headers.php"); ?>

  <body id="reportsPage">
    <div class="" id="home">
     
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">List of Accounts</h2>
              <p class="text-white">Accounts</p>
              <form action="" class="tm-signup-form row" method="post">

              <select class="custom-select" name="role">
                <option value="1">Admin</option>
                <option value="2">Tester</option>
                <option value="3">Menufecture</option>
                
              </select>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h1 class="tm-block-title">Add Users!</h1>
              <p style="color: white;" >Add users  here and regester yourself!</p>
              <div class="tm-avatar-container">
                
                </a>
              </div>
            
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
                <div class="form-group col-lg-12">
                  <label for="name"> Name</label>
                  <input
                    id="name"
                    name="name"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="email"> Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                
                <div class="form-group col-lg-12">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="psw"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                
              
                <div class="form-group col-lg-12">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                    name="save"
                  >
                    Add user
                  </button>
                </div>
                <div class="col-12">
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php
      include("config.php");
if(isset($_POST["save"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$role = $_POST["role"];
$psw = $_POST["psw"];


include "config.php";

$query = "SELECT * FROM `users` WHERE `name` = '{$name}'";

$result  = mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0)
{
    echo "user alraedy exist";

}
else
{
    $query1 = "INSERT INTO `users`(`name`, `email`, `role`, `passwords`) VALUES ('{$name}','{$email}','{$role}','{$psw}')";

    mysqli_query($conn, $query1);

   header("Location:http://localhost/eprojects/accounts.php");

    

}






}


?>

      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
