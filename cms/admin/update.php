<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digital-bd Admin - Update</title>

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
                        <a href="http://localhost/digitalbd/cms/admin/adminui.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/billingadmin.php"><i class="fa fa-fw fa-bar-chart-o"></i> Billing Informations</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/userinf.php"><i class="fa fa-fw fa-table"></i> View Users</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/search.php"><i class="fa fa-fw fa-search"></i> Search and Update</a>
                    </li>
                    <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/update.php"><i class="fa fa-fw fa-refresh"></i> Update user Info</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/addnewuser.php"><i class="fa fa-fw fa-edit"></i> Add new User</a>
                    </li>
                    <li>
                        <a href="http://localhost/Digitalbd/adlogin.php"><i class="fa fa-fw fa-sign-out"></i> Log Out</a>
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
                            Update
                            <small>User Info</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="">Dashboard</a>
                            </li>

                            <br>
                            <!-- Table -->

                            <!-- Update Start -->

                            <div>

                                <h1 class="page-header">
                                    Update below
                                    <small>(If not chnaged please input previous values)</small>
                                </h1>
                            </div>

                            <!-- <table class="table table-bordered">
                        <thead>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Package Type(Mbps)</th>
                            <th>Customer ID</th>
                            <th>Customer Password</th>
                        </thead>
                    <-->
                            <div class="reg-w3">
                                <div class="w3layouts-main">

                                    <form method="post">

                                        <label>First Name:</label>
                                        <input type="text" class="ggg" name="first" placeholder="First Name" required="true">
                                        <br>

                                        <label>Last Name:</label>
                                        <input type="text" class="ggg" name="last" placeholder="Last Name" required="true">

                                        <br>
                                        <label>Email: </label>
                                        <input type="email" class="ggg" name="email_id_1" placeholder="Primary Email Id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9-.-]+\.[a-z]{2,3}$">

                                        <br>
                                        <label>Address:</label>
                                        <input type="address" class="ggg" name="address" placeholder="Address">
                                        <br>
                                        <label>Mobile</label>
                                        <input type="tel" class="ggg" name="mobile_no" placeholder="Mobile No." required="true">

                                        <br>
                                        <label>Package Type(Mbps)</label>
                                        <select id="cars" class="ggg" name="package_type">
                                            <option value="5">5 MBPS</option>
                                            <option value="10">10 MBPS</option>
                                            <option value="15">15 MBPS</option>
                                            <option value="20">20 MBPS</option>
                                        </select>
                                        <br>
                                        <label> Customer ID</label>
                                        <input type="text" class="ggg" name="custreg" placeholder="DONT CHANGE" required="true">


                                        <label>Customer Password</label>
                                        <input type="password" class="ggg" name="custpassword" placeholder="Customer Password (More than 5 characters & only Digits)" required="true" pattern=".{5,}">
                                        <br>
                                        <input type="submit" value="submit" name="submit">
                                        <br>
                                    </form>

                                    <?php
                                    $dbserver = "127.0.0.1";
                                    $dbdatabase = "test";
                                    $dbusername = "root";
                                    $dbpassword = "";

                                    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                                    if (isset($_POST['submit'])) {
                                        $first = $_POST['first'];
                                        $last = $_POST['last'];
                                        $email_id_1 = $_POST['email_id_1'];
                                        $address = $_POST['address'];
                                        $mobile_no = $_POST['mobile_no'];
                                        $package_type = $_POST['package_type'];
                                        $custreg = $_POST['custreg'];
                                        $custpassword = $_POST['custpassword'];




                                        $res =  "update `customer_info` SET First_Name='$first', Last_name='$last',Email='$email_id_1',Address='$address',Mobile='$mobile_no',`Package Type`='$package_type',CustomerPassword='$custpassword' where  CustomerUserID='$custreg'";

                                        if ($conn->query($res) === TRUE) {
                                            echo "Updated successfully";
                                        } else {
                                            echo "Error: " . $res . "<br>" . $conn->error;
                                        }
                                    }

                                    ?>

                                </div>
                            </div>
                            <!-- Update End -->




                            <!-- End Table -->
                        </ol>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>