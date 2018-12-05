

<?php include('includes/header.php'); ?>

            <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <?php include('includes/top_nav.php'); ?>
            <?php include('includes/side_nav.php'); ?>    
        </nav>

            <div id="page-wrapper">

                <?php 

                (isset($_GET['page'])) ? $page = $_GET['page'] : $page = "";

                // if (isset($_GET['page'])) {
                //     $page = $_GET['page'];
                // } else {
                //     $page = "";
                // }

                switch ($page) {
                    case 'dashboard':
                        include('includes/dashboard.php');
                        break;

                    case 'financial_account':
                        include('includes/financial_account.php');
                        break;    

                    case 'checkbooktable':
                        include('includes/checkbooktable.php');
                        break;

                    case 'manage_employee':
                        include('includes/manage_employee.php');
                        break;

                    case 'invoice_table':
                        include('includes/invoice_table.php');
                        break;

                    case 'invoice':
                        include('includes/invoice.php');
                        break;    

                    case 'edit_ledgertable':
                         include('includes/edit_ledgertable.php');
                         break;

                    case 'edit_checkbooktable':
                        include('includes/edit_checkbooktable.php');
                        break;

                    case 'view_report':
                        include('includes/view_report.php');
                        break;

                    case 'profile':
                        include('includes/profile.php');
                        break;          

                    case 'edit_bank':
                        include('includes/edit_bank.php');
                        break;
                    default:
                        include('includes/dashboard.php');
                        break;
                }


                 ?>

<?php include('includes/footer.php'); ?>
<script>
    Morris.Donut({
        element: 'morris-donut-chart1',
        data: [{
            label: "Wood",
            value: 12
        }, {
            label: "Bricks",
            value: 23
        }, {
            label: "Cements",
            value: 20
        }, {
            label: "Sand",
            value: 10
        }
        ],
        resize: true
    });
</script>

