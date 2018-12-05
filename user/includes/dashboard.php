<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Invoice
                                
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <h4>RM 2000</h4>
                                <small>Overdue</small>

                                <small class="pull-right">Overdue</small>

                                <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <h4>RM 2000</h4>
                                <small>Not deposited</small>

                                <small class="pull-right">Deposited</small>

                                <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            
                            <!-- /.panel-body -->
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Profit and Loss
                                
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <h4>RM 34,00</h4>

                                <div class="pull-right">
                                    <h4 class="pull-right">&nbsp;Income : <small>RM 4000</small></h4>
                                </div>

                                <div class="progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="pull-right">
                                    <h4 class="pull-right">&nbsp;Expenses : <small>RM 3000</small></h4>
                                </div>
                               

                                <div class="progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            
                            <!-- /.panel-body -->
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Monthly Expenses
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart1"></div>
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>

                        <!-- /.panel -->
                        
                        <!-- /.panel -->
                        
                        <!-- /.panel -->
                    </div>


                    <!-- /.col-lg-8 -->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Banks Account
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                                data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="index.php?page=edit_bank">Edit</a>
                                            </li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <?php 
                                $uid = $_SESSION['id'];

                                $query = "SELECT * FROM banks WHERE uid=$uid";
                                $result = mysqli_query($conn, $query);

                                while ($row=mysqli_fetch_assoc($result)) {

                                    $bank_name=$row['bank_name'];
                                    $bank_number=$row['bank_number'];
                                    $bank_balance=$row['bank_balance'];
                                    ?>
                                    <h4><?php echo $bank_name; ?> - <?php echo $bank_number; ?></h4>
                                <small>Bank Balance - RM <?php echo $bank_balance; ?></small><br>
                                <small>CFAS Balance - RM 45000</small><br>

                                <hr>
                                    <?php

                                }
                                 ?>
                                

                               
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Sales
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                        
                        
                        <!-- /.panel .chat-panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->