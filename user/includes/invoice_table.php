<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Financial Account</h1>
    </div>
</div>

<div class="panel panel-default">
        <div class="panel-heading">
            Invoice
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                            data-toggle="dropdown">
                        Actions
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="index.php?page=edit_invoicetable">Add</a>
                        </li>  
                    </ul>
                 </div>
               </div>
        </div>

        <div class="panel-body">
             <fieldset>
        <div class="invoice">
            <div class="company-address">
                PC Bina ENTERPRISE
                <br />
                NO 44B - 2B, JALAN PANDAN CAHAYA 2/2,
                <br />
                TAMAN PANDAN CAHAYA, 68000 
                <br />
                AMPANG SELANGOR
                <br />
            </div>
            
            <div class="invoice-details">
                Invoice Number:
                <input type="text" name="invoice_number" class="form-control">
                <br />
                Date:
                <br>
                <input type="text" name="date" class="form-control">
            </div>
             
            <div class="customer-address">
                Customer Address:
                <br>
                <textarea rows="4" cols="50" name="customer_address" form="usrform" class="form-control" ></textarea>
            </div>
             
            <div class="clear-fix"></div>
                <table border='1' cellspacing='0' class="table table-bordered">
                    <tr >
                        <th width=250>Description</th>
                        <th width=80>Amount</th>
                        <th width=100>Total price</th>
                    </tr>
                        
     
                <?php 

                $query = "SELECT * FROM invoice";
                $query_result = mysqli_query($conn, $query);

                while ($row=mysqli_fetch_assoc($query_result)) {
        
                    $db_description = $row['description'];
                    $db_amount = $row['amount'];
                    $db_total = $row['total'];

                    ?>
                    <tr>
                        <td><?php echo $db_description; ?></td>
                        <td><?php echo $db_amount; ?></td>
                        <td><?php echo $db_total; ?></td>
                    </tr>
                    <?php
                }
                 ?>
                </table>
            </div>
        </fieldset>
        </div>
</div>

<style type="text/css">
 body {
            align: center;
        }

        div.invoice {
        border:2px solid #ccc;
        padding:10px;
        /*        height:740pt;*/
        width:570pt;
        }
 
        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:250pt;
            padding: 2px;
        }
         
        div.invoice-details {
            padding: 2px;
            float:right;
            width:200pt;
        }
         
        div.customer-address {
            padding: 2px;
            float:center;
            margin-bottom:50px;
            margin-top:100px;
            width:250pt;
        }
         
         
        table {
            width:100%;
        }
         
        th {
            text-align: left;
        }
         

        tr {
            border: 0px;
        }
         
        .text-left {
            text-align:left;
        }
         
        .text-center {
            text-align:center;
        }
         
        .text-right {
            text-align:right;
        }
            

</style>
      
	
   
 
    



