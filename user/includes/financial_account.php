<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Financial Account</h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				Ledger
				<div class="pull-right">
	                <div class="btn-group">
	                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
	                            data-toggle="dropdown">
	                        Actions
	                        <span class="caret"></span>
	                    </button>
	                    <ul class="dropdown-menu pull-right" role="menu">
	                        <li><a href="index.php?page=edit_ledgertable">Add</a>
	                        </li>  
	                    </ul>
	                </div>
				            </div>
				</div>
				<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Date</th>
							<th>Description</th>
							<th>Debit</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
				<?php 

				$query = "SELECT * FROM ledger";
				$query_result = mysqli_query($conn, $query);

				while ($row=mysqli_fetch_assoc($query_result)) {
					
					$db_date = $row['date'];
					$db_description = $row['description'];
					$db_debit = $row['debit'];
					$db_credit = $row['credit'];
					

					?>
					<tr>
						<td><?php echo $db_date; ?></td>
						<td><?php echo $db_description; ?></td>
						<td><?php echo $db_debit; ?></td>
						<td><?php echo $db_credit; ?></td>
					</tr>
					<?php
				}
				 ?>
				
			</tbody>
				</table>
			</div>
		</div>
		
	</div>
	</div>