<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
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

  <body>
    <div>
     <?php include("headers.php"); ?>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Dashboard, Login</h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="index.php" method="post" class="tm-login-form">
                  <div class="form-group">
                    <label for="username">Email adress</label>
                    <input
                      name="email"
                      type="text"
                      class="form-control validate"
                      id="username"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="psw"
                      type="password"
                      class="form-control validate"
                      id="password"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                      name="login"
                    >
                      Login
                    </button>
                  </div>
                  
                </form>
                <?php
error_reporting(0);
include "config.php";
if(isset($_POST["login"]))
{




$email = $_POST["email"];
$psw = $_POST["psw"];

$query = "SELECT `u_id`, `name` , `role` FROM `users` WHERE  `email` = '{$email}' AND `passwords` = '{$psw}'";
$result =  mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
  {
      // session_start();

      $_SESSION["name"] = $row["name"];
      $_SESSION["u_id"] = $row["u_id"];
      $_SESSION["role"] = $row["role"];

      header("location:http://localhost/eprojects/index.php");
  }
}
else
{
  echo "username and password did not match";
}




}



?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php"); ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
