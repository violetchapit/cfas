<?php ob_start(); ?>
<?php session_start(); ?>
<?php error_reporting(0); ?>

<?php include("includes/db.php"); ?>

<?php 

$message = "";




  if (isset($_POST['register'])) {

  $first_name   = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name    = mysqli_real_escape_string($conn, $_POST['last_name']);
  $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
  $ssm_number   = mysqli_real_escape_string($conn, $_POST['ssm_number']);
  $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
  $username     = mysqli_real_escape_string($conn, $_POST['username']);    
  $email        = mysqli_real_escape_string($conn, $_POST['email']);
  $password     = mysqli_real_escape_string($conn, $_POST['password']);


  $query = "INSERT INTO users(first_name, last_name, company_name, ssm_number, phone_number, username, email, password) ";

  $query .= "VALUES('$first_name', '$last_name', '$company_name', '$ssm_number', '$phone_number', '$username', '$email', '$password')";

  $result = mysqli_query($conn, $query);

  if (!$query) {
    die('Query failed' . mysqli_error($conn));
    exit();
  } else {
    $message = "Successfully registered";
  }



    
}






 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class="col-sm-6 col-md-4">

        <div class="card border-info text-center">
          <div class="card-header">
            Register
          </div>
          <div class="card-body">
            <?php echo $message; ?>
            <img src="https://placeimg.com/128/128/tech/sepia">
            <h4 class="text-center">Contractor Financial Accounting Registration</h4>
            <form class="form-signin" action="" method="post">
              <input type="text" class="form-control mb-2" placeholder="First Name" required autofocus name="first_name">

              <input type="text" class="form-control mb-2" placeholder="Last Name" required autofocus name="last_name">

              <input type="text" class="form-control mb-2" placeholder="Company Name" required autofocus name="company_name">

              <input type="text" class="form-control mb-2" placeholder="SSM Number" required autofocus name="ssm_number" id="ssm_number" onblur="check_ssm()">
              <span id="ssm_check" style="font-size: 12px;"></span>

              <input type="text" class="form-control mb-2" placeholder="Phone Number" required autofocus name="phone_number" id="phone_number" maxlength="11">

              <input type="text" class="form-control mb-2" placeholder="Username" required autofocus name="username" id="username" onblur="check_username()">
              <span id="username_check" style="font-size: 12px;"></span>

              <input type="email" class="form-control mb-2" placeholder="Email" required autofocus name="email" id="email" onblur="check_email()">
              <span id="email_check" style="font-size: 12px;"></span>

              <input type="password" class="form-control mb-2" placeholder="Password" required autofocus name="password">

              
              <button class="btn btn-lg btn-primary btn-block mb-1" type="submit" name="register" id="register">Register</button>
              <button class="btn btn-lg btn-default btn-block mb-1" type="reset" name="reset" id="reset">Reset</button>
              <label class="checkbox float-left">
                <input type="checkbox" value="remember-me">
                Remember me
              </label>

            </form>
          </div>
        </div>
        <a href="login.php" class="float-right">Already have an account? Sign In </a>
      </div>
    </div>
  </div>

  <hr>

</body>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>

    $(document).ready(function(){
       $('#phone_number').keyup(function(){
        $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
        });
    });
  
 

      function check_ssm(){

        $('#loading').show();
        $.ajax({

          url: 'action.php',
          type: 'POST',
          data: 'ssm_number='+$("#ssm_number").val(),
          success: function(data){

            $('#ssm_check').html(data);
            $('#loading').hide();
          }
        });
      }

      function check_email(){

        $('#loading').show();
        $.ajax({

          url: 'action.php',
          type: 'POST',
          data: 'email='+$("#email").val(),
          success: function(data){

            $('#email_check').html(data);
            $('#loading').hide();
          }
        });
      }

      function check_username(){

        $('#loading').show();
        $.ajax({

          url: 'action.php',
          type: 'POST',
          data: 'username='+$("#username").val(),
          success: function(data){

            $('#username_check').html(data);
            $('#loading').hide();
          }
        });
      }

  </script>
</html>

