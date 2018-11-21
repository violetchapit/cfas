
<?php 

$id = $_SESSION['id'];
$message = "";


$query = "SELECT * FROM users WHERE id=$id";

$run_query = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($run_query)) {
	
	$db_first_name = $row['first_name'];
	$db_last_name = $row['last_name'];
	$db_company_name = $row['company_name'];
	$db_ssm_number = $row['ssm_number'];
	$db_phone_number = $row['phone_number'];
	$db_username = $row['username'];
	$db_email = $row['email'];
	$db_password = $row['password'];
}

if (isset($_POST['update'])) {
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$company_name = $_POST['company_name'];
	$ssm_number = $_POST['ssm_number'];
	$phone_number = $_POST['phone_number'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "UPDATE users SET first_name='$first_name', last_name='$last_name', ";
	$query .= "company_name='$company_name', ssm_number='$ssm_number', ";
	$query .= "phone_number='$phone_number', username='$username', password='$password' ";
	$query .= "WHERE id=$id";

	$result = mysqli_query($conn, $query);

	if (!$result) {
		die('query failed!'.mysqli_error($conn));
	} else {
		$message = '<p class="bg-success">Profile Updated!</p>';
	}
}





 ?>




<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Profile</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
    	<?php echo $message; ?>
    	<form action="" method="post" enctype="multipart/form-data">
    		<div class="form-group">
    			<div class="row">
    				<div class="col-lg-6">
	    				<label>First Name</label>
	    				<input type="text" name="first_name" class="form-control" value="<?php echo $db_first_name; ?>">
	    			</div>
	    			<div class="col-lg-6">
	    				<label>Last Name</label>
	    				<input type="text" name="last_name" class="form-control" value="<?php echo $db_last_name; ?>">
	    			</div>
    			</div>
    			
    		</div>
    		<div class="form-group">
    			<label>Company Name</label>
    			<input type="text" name="company_name" class="form-control" value="<?php echo $db_company_name; ?>">
    		</div>
    		<div class="form-group">
    			<label>SSM Number</label>
    			<input type="text" name="ssm_number" class="form-control" value="<?php echo $db_ssm_number; ?>">
    		</div>
    		<div class="form-group">
    			<label>Phone Number</label>
    			<input type="text" name="phone_number" class="form-control" value="<?php echo $db_phone_number; ?>">
    		</div>
    		<div class="form-group">
    			<label>Username</label>
    			<input type="text" name="username" class="form-control" value="<?php echo $db_username; ?>">
    		</div>
    		<div class="form-group">
    			<label>Email</label>
    			<input type="email" name="email" class="form-control" value="<?php echo $db_email; ?>">
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input type="password" name="password" class="form-control" value="<?php echo $db_password; ?>">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="update" value="Update" class="btn btn-primary">
    		</div>
    	</form>
    </div>
</div>