<?php 

$message = "";
if (isset($_POST['add'])) {
	$description = $_POST['description'];
	$folio = $_POST['folio'];
	$debit = $_POST['debit'];
	$credit = $_POST['credit'];
	$balance = $_POST['balance'];

	$query = "INSERT INTO ledger(description, folio, debit, credit, balance) VALUES('$description', '$folio', '$debit', '$credit', '$balance')";

	$insertledger = mysqli_query($conn, $query);

	if (!$insertledger) {
		
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
        <h1 class="page-header">Manage Ledger Table</h1>
    </div>
</div>

	<div class="row">
	<div class="col-lg-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Date</th>
					<th>Description</th>
					<th>Folio</th>
					<th>Debit</th>
					<th>Credit</th>
					<th>Balance</th>
				</tr>
			</thead>
			<tbody>
				<?php 

				$query = "SELECT * FROM ledger";
				$query_result = mysqli_query($conn, $query);

				while ($row=mysqli_fetch_assoc($query_result)) {
					
					$db_date = $row['date'];
					$db_description = $row['description'];
					$db_folio = $row['folio'];
					$db_debit = $row['debit'];
					$db_credit = $row['credit'];
					$db_balance = $row['balance'];

					?>
					<tr>
						<td><?php echo $db_date; ?></td>
						<td><?php echo $db_description; ?></td>
						<td><?php echo $db_folio; ?></td>
						<td><?php echo $db_debit; ?></td>
						<td><?php echo $db_credit; ?></td>
						<td><?php echo $db_balance; ?></td>
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
						Description: <input type="text" name="description" placeholder="Description" required>
					</div>
					<div class="form-group">
						Folio: <input type="text" name="folio" placeholder="Folio" required>
					</div>
					<div class="form-group">
						Debit: <input type="text" name="debit" placeholder="Debit">
					</div>
					<div class="form-group">
						Credit: <input type="text" name="credit" placeholder="Credit">
					</div>
					<div class="form-group">
						Balance: <input type="text" name="balance" placeholder="Balance" required>
					</div>
					<div class="form-group">
						<input type="submit" name="add" class="btn btn-primary" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>	