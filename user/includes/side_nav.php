<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.php?page=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Financial Account<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'contractor'): ?>
                    <li>
                        <a href="index.php?page=financial_account">Ledger</a>
                    </li>
                    <li>
                        <a href="index.php?page=invoice_table">Invoice</a>
                    </li>
                    <li>
                        <a href="index.php?page=checkbooktable">Check Book</a>
                    </li>
                    <?php else: ?>

                        <li>
                        <a href="index.php?page=checkbooktable">Check Book</a>
                    </li>

                <?php endif; ?>
                </ul>
                <!-- <a href="index.php?page=financial_account"><i class="fa fa-table fa-fw"></i> Financial Account</a> -->
            </li>

            
            <li>
                <a href="#"><i class="fa fa-table fa-fw"></i> Manage Employee <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="index.php?page=financial_account">Contractor</a>
                    </li>
                    <li>
                        <a href="morris.html">Project Manager</a>
                    </li>
                    <li>
                        <a href="index.php?page=checkbooktable">Clerk</a>
                    </li>
                </ul>
            </li>
                <!-- 
            </li>
            <li>
                <a href="index.php?page=manage_employee"><i class="fa fa-edit fa-fw"></i> Manage Employee</a>
            </li> -->
            <li>
                <a href="index.php?page=view_report"><i class="fa fa-briefcase fa-fw"></i> View Report</a>
            </li>

            <li>
                <a href="index.php?page=profile"><i class="fa fa-user fa-fw"></i> Profile</a>
            </li>

            <li>
                <a href="logout.php"><i class="fa fa-certificate fa-fw"></i> Logout</a>
            </li>
            
            
        </ul>
    </div>
</div>