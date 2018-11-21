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
				<tr>
					<td>12/4/2018</td>
					<td>Pembayaran Gaji</td>
					<td>0001</td>
					<td>-</td>
					<td>RM 1030.40</td>
					<td>RM 98,123.00</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>


<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-4">
				<form action="" method="post">
					<div class="form-group">
						Date <input type="text" name="date" placeholder="Date" required>
					</div>
					<div class="form-group">
						Description: <input type="text" name="description" placeholder="Description" required>
					</div>
					<div class="form-group">
						Folio: <input type="text" name="folio" placeholder="Folio" required>
					</div>
					<div class="form-group">
						Debit: <input type="text" name="debit" placeholder="Debit" required>
					</div>
					<div class="form-group">
						Credit: <input type="text" name="credit" placeholder="Credit" required>
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