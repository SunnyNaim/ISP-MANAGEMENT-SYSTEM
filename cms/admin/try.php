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

    <title>Digital-bd SEARCH & UPDATE</title>


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
                    <li class>
                        <a href="http://localhost/digitalbd/cms/admin/adminui.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/billingadmin.php"><i class="fa fa-fw fa-bar-chart-o"></i> Billing Informations</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/userinf.php"><i class="fa fa-fw fa-table"></i> View Users</a>
                    </li>
                    <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/search.php"><i class="fa fa-fw fa-search"></i> Search and Update</a>
                    </li>
                    <!-- <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/try.php"><i class="fa fa-fw fa-search"></i> TRY</a>
                    </li> -->
                    <!-- <li>
                        <a href="http://localhost/digitalbd/cms/admin/update.php"><i class="fa fa-fw fa-update"></i> Update User Info</a>
                    </li> -->
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
                            Welcome
                            <small>Admin</small>
                        </h1>
                        <ol class="breadcrumb">

                            <br>
                            <!-- Table -->




                            <br>
                            <br>
                            <!-----------------Update User START------------------------>

                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                            <div class="container bootstrap snippets bootdeys">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-9">
                                        <!----------- Form START----------- -->
                                        <form method="post" class="form-horizontal">
                                            <!-- <div class="panel panel-default">
                                                <div class="panel-body text-center">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar" alt="User avatar">
                                                </div>
                                            </div> -->




                                            <!------Start User AND Package TYPE----- -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Update User info</h4>
                                                </div>
                                                <br>

                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">User ID(Don't Change)</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="custreg" class="form-control" value="<?php print_r($_SESSION['CustomerUserID']); ?>" name="custreg" placeholder="Keep Previous ID">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label"> Package Type</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="package_type" name="package_type">
                                                                <option value="<?php print_r($_SESSION['Package Type']); ?>"><?php print_r($_SESSION['Package Type']); ?>
                                                                </option>
                                                                <option value="5">5 MBPS</option>
                                                                <option value="10">10 MBPS</option>
                                                                <option value="15">15 MBPS</option>
                                                                <option value="20">20 MBPS</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!------ End User AND Package TYPE----- -->


                                            <!--  Start Contact Info -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Contact info</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">First Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="first" id="first" placeholder="First Name" value="<?php print_r($_SESSION['First_Name']); ?>">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Last Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="last" id="last" placeholder="Last Name" value="<?php print_r($_SESSION['Last_name']); ?>">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Mobile number</label>
                                                        <div class="col-sm-10">
                                                            <input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile No." value="<?php print_r($_SESSION['Mobile']); ?>">


                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">E-mail</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" id="email_id_1" class="form-control" name="email_id_1" placeholder="Primary Email Id" value="
                                                    <?php
                                                    print_r($_SESSION['Email']);
                                                    ?>
                                                    ">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <!-- <textarea rows="3" class="form-control" placeholder="Address" value="
         
                                                    "></textarea> -->
                                                            <input type="address" class="form-control" id="address" name="address" placeholder="Address" value="<?php print_r($_SESSION['Address']); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  End Contact Info -->

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Security</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" id="custpassword" name="custpassword" value="<?php print_r($_SESSION['CustomerPassword']); ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="form-group">
                                                        <div class="col-sm-10 col-sm-offset-2">
                                                            <input type="submit" class="btn btn-primary" value="Update" name="update">

                                                            <input type="submit" value="Reload 2 Time" name="reset" class="btn btn-default">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>

                                        <?php
                                        $dbserver = "127.0.0.1";
                                        $dbdatabase = "test";
                                        $dbusername = "root";
                                        $dbpassword = "";

                                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);



                                        if (isset($_POST['update'])) {
                                            $first = $_POST['first'];
                                            $last = $_POST['last'];
                                            $email_id_1 = $_POST['email_id_1'];
                                            $address = $_POST['address'];
                                            $mobile_no = $_POST['mobile_no'];
                                            $package_type = $_POST['package_type'];
                                            $custreg = $_POST['custreg'];
                                            $custpassword = $_POST['custpassword'];

                                            $res =  "update `customer_info` SET `First_Name`='$first', `Last_name`='$last',`Email`='$email_id_1',`Address`='$address',`Mobile`='$mobile_no',`Package Type`='$package_type',`CustomerPassword`='$custpassword' where  `CustomerUserID`='$custreg'";

                                            if ($conn->query($res) === TRUE) {
                                                echo "Updated successfully";
                                            } else {
                                                echo "Error: " . $res . "<br>" . $conn->error;
                                            }
                                        }
                                        if (isset($_POST['reset'])) {
                                            $valueToSearch = $_SESSION['CustomerUserID'];
                                            $query = "SELECT * FROM `customer_info`  WHERE CONCAT(`First_Name`, `Last_Name`, `CustomerUserID`, `Package Type`) LIKE '%" . $_SESSION['CustomerUserID'] . "%'";
                                            $search_result = mysqli_query($conn, $query);

                                            while ($rows = $search_result->fetch_assoc()) {
                                                $_SESSION['CustomerUserID'] = $rows['CustomerUserID'];
                                                $_SESSION['Package Type'] = $rows['Package Type'];

                                                $_SESSION['First_Name'] = $rows['First_Name'];
                                                $_SESSION['Last_name'] = $rows['Last_name'];
                                                $_SESSION['Mobile'] = $rows['Mobile'];
                                                $_SESSION['Email'] = $rows['Email'];
                                                $_SESSION['Address'] = $rows['Address'];
                                                $_SESSION['CustomerPassword'] = $rows['CustomerPassword'];
                                            }
                                        }


                                        $conn->close();

                                        ?>


                                    </div>
                                </div>
                            </div>

                            <!-----------------Update User end------------------------>


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