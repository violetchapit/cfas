<?php 

if (isset($_GET['delete'])) {
	
	$id = $_GET['delete'];
	$query = "DELETE FROM banks WHERE id=$id";

	$result = mysqli_query($conn, $query);
	header('location:index.php?page=edit_bank');
}

if (isset($_POST['add'])) {
	
	$bank_name = $_POST['bank_name'];
	$bank_number = $_POST['bank_number'];
	$bank_balance = $_POST['bank_balance'];

	$query = "INSERT INTO banks(bank_name, bank_number, bank_balance) ";
	$query .= "VALUES('$bank_name', '$bank_number', '$bank_balance') ";

	$result = mysqli_query($conn, $query);
}




 ?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Bank Account</h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4">
				<form action="" method="post">
					<div class="form-group">
						Bank Name: <input type="text" name="bank_name" placeholder="Bank Name" required>
					</div>
					<div class="form-group">
						Bank Number: <input type="text" name="bank_number" placeholder="Bank Number" required>
					</div>
					<div class="form-group">
						Bank Balance: <input type="text" name="bank_balance" placeholder="Bank Balance" required>
					</div>
					<div class="form-group">
						<input type="submit" name="add" class="btn btn-primary" value="Add">
					</div>
				</form>

				<?php 
                            
                            if(isset($_GET['edit'])){
                                
                            $cat_id = $_GET['edit'];
                            include "includes/bank_update.php";
                            }
                            
                            
                       
                            
                            
                            
                 ?>
				
			</div>
			<div class="col-lg-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Bank Name</th>
							<th>Bank Number</th>
							<th>Bank Balance</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 

						$query = "SELECT * FROM banks";
						$result = mysqli_query($conn, $query);

						while ($row=mysqli_fetch_assoc($result)) {
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['bank_name']; ?></td>
								<td><?php echo $row['bank_number']; ?></td>
								<td><?php echo $row['bank_balance']; ?></td>
								<td><a href="index.php?page=edit_bank&edit=<?php echo $row['id']; ?>">Edit</a></td>
								<td><a onclick="javascript:return confirm('Are you sure you want to delete?')" href="index.php?page=edit_bank&delete=<?php echo $row['id']; ?>">Delete</a></td>
							</tr>
							<?php
						}
						 ?>
						
					</tbody>
				</table>
			</div>
		</div>
		<p><a href="index.php?page=add_bank"></a></p>
		<div class="table-responsive" id="bank_table">
    		<table></table>
   		</div>
			
	</div>
		
	</div>
</div>