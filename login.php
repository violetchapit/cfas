<?php ob_start(); ?>
<?php session_start(); ?>
<?php error_reporting(0); ?>

<?php include("includes/db.php"); ?>

<?php 

$message = "";

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);


  $query = "SELECT * FROM users ";
  $query .= "WHERE username = '$username' ";
  $query .= "AND password = '$password'";
  $fetch_query = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($fetch_query)) {

    $db_id = $row['id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_email = $row['email'];
  }

  if ($username === $db_username && $password === $db_password) {

    $_SESSION['id'] = $db_id;
    $_SESSION['user'] = $db_username;
    $_SESSION['email'] = $db_email;

    header("location:user/index.php");
  } else {

    //header("location:login.php");
    $message = "Invalid username or password";
  }

}
} else {

  //$message = "Please fill the field";
}






 ?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <div class="container pt-3">
    <div class="row justify-content-sm-center">
      <div class="col-sm-6 col-md-4">

        <div class="card border-info text-center">
          <div class="card-header">
            Sign in to continue
          </div>
          <div class="card-body">
            <?php echo $message; ?>
            <img src="https://placeimg.com/128/128/tech/sepia">
            <h4 class="text-center">Contractor Financial Accounting Sign In</h4>
            <form class="form-signin" action="" method="post">
              <input type="text" class="form-control mb-2" placeholder="Username" required autofocus name="username">
              <input type="password" class="form-control mb-2" placeholder="Password" required name="password">
              <button class="btn btn-lg btn-primary btn-block mb-1" href="index.php" type="submit" name="login">Sign in</button>
              <label class="checkbox float-left">
                <input type="checkbox" value="remember-me">
                Remember Me
              </label>
              <a href="#" class="float-right">Need help?</a>
            </form>
          </div>
        </div>
        <a href="register.php" class="float-right">Create an account </a>
      </div>
    </div>
  </div>

  <hr>

</body>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>