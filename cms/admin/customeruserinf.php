<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digital-bd Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="./Digitalbd/cms/admin/css/styles.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Digital-BD</a>
            </div>
            <!-- Top Menu Items -->


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/customerui.php"><i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>

                    <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/customeruserinf.php"><i class="fa fa-fw fa-table"></i> View Your Informations</a>

                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/custbilling.php"><i class="fa fa-fw fa-bar-chart-o"></i> View Your Billing Informations</a>
                    </li>

                    <li>
                        <a href="http://localhost/Digitalbd/customerlogin.php"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
                    </li>
                </ul>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>



        <!-- /.container-fluid -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            USER INFO
                            <small>VIEW</small>
                        </h1>
                        <ol class="breadcrumb">
                            <!-- Table -->

                            <h2>Your Informations are Shown Below</h2>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Package type</th>
                            <th>Customer ID</th>
                            <th>Customer Password</th>
                        </thead>

                        <!-- PHP START -->
                        <?php

                        $dbserver = "127.0.0.1";
                        $dbdatabase = "test";
                        $dbusername = "root";
                        $dbpassword = "";

                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);



                        $valueToSearch1 = $_SESSION['CustomerUserID'];
                        $query = "SELECT * FROM `customer_info` where CONCAT( `CustomerUserID`, `CustomerPassword`) LIKE '%" . $valueToSearch1 . "%'";
                        $search_result = mysqli_query($conn, $query);

                        while ($rows = $search_result->fetch_assoc()) {
                            echo '

				<tbody>
					      <tr>
					        <td>' . $rows['First_Name'] . '</td>
                            <td>' . $rows['Last_name'] . '</td>
                            <td>' . $rows['Email'] . '</td>
                            <td>' . $rows['Address'] . '</td>
                            <td>' . $rows['Mobile'] . '</td>
                            <td>' . $rows['Package Type'] . '</td>
                            <td>' . $rows['CustomerUserID'] . '</td>
                            <td>' . $rows['CustomerPassword'] . '</td>
					      </tr>
					    </tbody>
				
			';
                        }


                        ?>

                    </table>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <i class="icon-purse"></i>
                        <a href="http://localhost/digitalbd/cms/admin/customerui.php"> <span>Dash Board</span><a>

                    </div>
                    </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <!-- End Table -->
    </ol>
    </div>
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>