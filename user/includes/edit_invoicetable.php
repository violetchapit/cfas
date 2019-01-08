<?php 

$message = "";
if (isset($_POST['add'])) {
	$invoice_number = $_POST['invoice_number'];
	$description = $_POST['description'];
	$amount = $_POST['amount'];
	$total = $_POST['total'];
	$customer_address = $_POST['customer_address'];

	$query = "INSERT INTO invoice(invoice_number, description, amount, total, customer_address) VALUES('$invoice_number', '$description','$amount', '$total', '$customer_address')";

	$insertinvoice = mysqli_query($conn, $query);

	if (!$insertinvoice) {
		
		$message = "query failed" . mysqli_error($conn);
		// die('query failed' . mysqli_error($conn));
		// exit();
	} else {
		$message = "data added";
	}
}

 ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Manage Invoice Table</h1>
    </div>
</div>

	<div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Date</th>
					<th>Invoice Nunber</th>
					<th>Description</th>
					<th>Amount</th>
					<th>Total Price</th>
					
				</tr>
			</thead>
			<tbody>
			<?php 

				$query = "SELECT * FROM invoice";
				$query_result = mysqli_query($conn, $query);

				while ($row=mysqli_fetch_assoc($query_result)) {
					
					$db_date = $row['date'];
					$db_invoice_number = $row['invoice_number'];
					$db_description = $row['description'];
					$db_amount = $row['amount'];
					$db_total = $row['total'];
					

					?>
					<tr>
						<td><?php echo $db_date; ?></td>
						<td><?php echo $db_invoice_number; ?></td>
						<td><?php echo $db_description; ?></td>
						<td><?php echo $db_amount; ?></td>
						<td><?php echo $db_total; ?></td>
					</tr>

				<?php
				}
				 ?>
				
			</tbody>
		</table>
	</div>
	</div>

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4">
				<?php echo $message; ?>
				<form action="" method="post">
					<div class="form-group">
						Invoice Number: <input type="text" name="invoice_number" placeholder="Invoice Number" >
					</div>
					<div class="form-group">
						Description: <input type="text" name="description" placeholder="Description" required>
					</div>
					<div class="form-group">
						Amount: <input type="text" name="amount" placeholder="Amount">
					</div>
					<div class="form-group">
						Total: <input type="text" name="total" placeholder="Total" required>
					</div>
					<div class="form-group">
						<input type="submit" name="add" class="btn btn-primary" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	