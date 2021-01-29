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

    <title>Digital-bd Billing</title>

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
                    <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/billingadmin.php"><i class="fa fa-fw fa-bar-chart-o"></i> Billing Informations</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/income.php"><i class="fa fa-fw fa-table"></i>Income</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/income.php"><i class="fa fa-fw fa-table"></i>Expense</a>
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
                            Bill Update
                            <small>Informations</small>
                        </h1>
                        <ol class="breadcrumb">
                            <!-- Table -->
                            <div class="reg-w3">
                                <div class="w3layouts-main">

                                    <form method="post">

                                        <label> Input Customer ID</label>
                                        <input type="text" class="ggg" name="custreg" placeholder="User ID" required="true">

                                        <label>Select Month</label>
                                        <select id="cars" class="ggg" name="month">
                                            <option value="january">Jan</option>
                                            <option value="february">Feb</option>
                                            <option value="march">March</option>
                                            <option value="april">Apr</option>
                                            <option value="may">May</option>
                                            <option value="june">Jun</option>
                                            <option value="July">Jul</option>
                                            <option value="august">Aug</option>
                                            <option value="september">Sept</option>
                                            <option value="october">Oct</option>
                                            <option value="november">Nov</option>
                                            <option value="december">Dec</option>
                                        </select>
                                        <label> Paid Ammount</label>
                                        <input type="text" class="ggg" name="amount" placeholder="Amount" required="true">

                                        <input type="submit" value="Update" name="submit">

                                        <button onClick="window.location.href=window.location.href">Refresh Page</button>

                                        <?php
                                        $dbserver = "127.0.0.1";
                                        $dbdatabase = "test";
                                        $dbusername = "root";
                                        $dbpassword = "";

                                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                                        /////////////// Month start//////////////

                                        if (isset($_POST['submit'])) {

                                            $custreg = $_POST['custreg'];
                                            // FOR JANUARY ONLY NO OTHER VALUE CHANGE
                                            if ($_POST['month'] == "january") {
                                                $month1 = $_POST['amount'];

                                                $res = "update `billing` set january=' $month1 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR feb ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "february") {
                                                $month2 = $_POST['amount'];

                                                $res = "update `billing` set february=' $month2 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR march ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "march") {
                                                $month3 = $_POST['amount'];

                                                $res = "update `billing` set march=' $month3 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR April ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "april") {
                                                $month4 = $_POST['amount'];

                                                $res = "update `billing` set april=' $month4 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR may ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "may") {
                                                $month5 = $_POST['amount'];
                                                $res = "update `billing` set may=' $month5 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR june ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "june") {
                                                $month6 = $_POST['amount'];

                                                $res = "update `billing` set june=' $month6 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR july ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "july") {
                                                $month7 = $_POST['amount'];

                                                $res = "update `billing` set july=' $month7 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR aug ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "august") {
                                                $month8 = $_POST['amount'];

                                                $res = "update `billing` set august=' $month8 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR sep ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "september") {
                                                $month9 = $_POST['amount'];

                                                $res = "update `billing` set september=' $month9 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR oct ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "october") {
                                                $month10 = $_POST['amount'];

                                                $res = "update `billing` set october=' $month10 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR nov ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "november") {
                                                $month11 = $_POST['amount'];
                                                $res = "update `billing` set november=' $month11 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                            // FOR dec ONLY NO OTHER VALUE CHANGE
                                            elseif ($_POST['month'] == "december") {
                                                $month12 = $_POST['amount'];

                                                $res = "update `billing` set december=' $month12 ' where CustomerUserID='$custreg'";

                                                if ($conn->query($res) === TRUE) {
                                                    echo "Updated successfully";
                                                } else {
                                                    echo "Error: " . $res . "<br>" . $conn->error;
                                                }
                                            }
                                        }

                                        ///////////// Month end////////////

                                        ?>

                                    </form>

                                    <!-------------- User info Start--------------- -->

                                    <br>
                                    <h1 class="page-header">
                                        Billing Info
                                        <small>(Last 12 Month)</small>
                                    </h1>

                                    <table class="table table-bordered">
                                        <thead>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Customer ID</th>
                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>March</th>
                                            <th>Apr</th>
                                            <th>May</th>
                                            <th>June</th>
                                            <th>July</th>
                                            <th>August</th>
                                            <th>September</th>
                                            <th>October</th>
                                            <th>November</th>
                                            <th>December</th>
                                        </thead>

                                        <?php
                                        $dbserver = "127.0.0.1";
                                        $dbdatabase = "test";
                                        $dbusername = "root";
                                        $dbpassword = "";

                                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                                        $in_sql = "SELECT c.First_Name,c.Last_name,c.CustomerUserID,b.* FROM `customer_info` c join `billing` b on (c.CustomerUserID = b.CustomerUserID) ";

                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '	
                 <tbody>
					      <tr>
					        <td>' . $rows['First_Name'] . '</td>
                            <td>' . $rows['Last_name'] . '</td>
                            <td>' . $rows['CustomerUserID'] . '</td>
                            <td>' . $rows['january'] . '</td>
                            <td>' . $rows['february'] . '</td>
                            <td>' . $rows['march'] . '</td>
                            <td>' . $rows['april'] . '</td>
                            <td>' . $rows['may'] . '</td>
                            <td>' . $rows['june'] . '</td>
                            <td>' . $rows['july'] . '</td>
                            <td>' . $rows['august'] . '</td>
                            <td>' . $rows['september'] . '</td>
                            <td>' . $rows['october'] . '</td>
                            <td>' . $rows['november'] . '</td>
                            <td>' . $rows['december'] . '</td>
					      </tr>
					    </tbody>
				';
                                            }
                                        }
                                        ?>

                                    </table>
                                    <h1 class="page-header">
                                        Billing Total Collection
                                        <small>(Last 12 Month)</small>
                                    </h1>
                                    <table class="table table-bordered">
                                        <thead>

                                            <th>Jan</th>
                                            <th>Feb</th>
                                            <th>March</th>
                                            <th>Apr</th>
                                            <th>May</th>
                                            <th>June</th>
                                            <th>July</th>
                                            <th>August</th>
                                            <th>September</th>
                                            <th>October</th>
                                            <th>November</th>
                                            <th>December</th>
                                        </thead>
                                        <?php
                                        $dbserver = "127.0.0.1";
                                        $dbdatabase = "test";
                                        $dbusername = "root";
                                        $dbpassword = "";

                                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                                        $Jan = mysqli_query($conn, 'SELECT SUM(`january`) as total1 FROM `billing`');
                                        $row = mysqli_fetch_array($Jan);
                                        $sum1 = $row['total1'];
                                        $_SESSION['total1'] = $sum1;

                                        $Feb = mysqli_query($conn, 'SELECT SUM(`february`) as total2 FROM `billing`');
                                        $row = mysqli_fetch_array($Feb);
                                        $sum2 = $row['total2'];
                                        $_SESSION['total2'] = $sum2;

                                        $Mar = mysqli_query($conn, 'SELECT SUM(`march`) as total3 FROM `billing`');
                                        $row = mysqli_fetch_array($Mar);
                                        $sum3 = $row['total3'];
                                        $_SESSION['total3'] = $sum3;

                                        $Apr = mysqli_query($conn, 'SELECT SUM(`april`) as total4 FROM `billing`');
                                        $row = mysqli_fetch_array($Apr);
                                        $sum4 = $row['total4'];
                                        $_SESSION['total4'] = $sum4;

                                        $May = mysqli_query($conn, 'SELECT SUM(`may`) as total5 FROM `billing`');
                                        $row = mysqli_fetch_array($May);
                                        $sum5 = $row['total5'];
                                        $_SESSION['total5'] = $sum5;

                                        $Jun = mysqli_query($conn, 'SELECT SUM(`june`) as total6 FROM `billing`');
                                        $row = mysqli_fetch_array($Jun);
                                        $sum6 = $row['total6'];
                                        $_SESSION['total6'] = $sum6;

                                        $Jul = mysqli_query($conn, 'SELECT SUM(`july`) as total7 FROM `billing`');
                                        $row = mysqli_fetch_array($Jul);
                                        $sum7 = $row['total7'];
                                        $_SESSION['total7'] = $sum7;

                                        $Aug = mysqli_query($conn, 'SELECT SUM(`august`) as total8 FROM `billing`');
                                        $row = mysqli_fetch_array($Aug);
                                        $sum8 = $row['total8'];
                                        $_SESSION['total8'] = $sum8;

                                        $Sep = mysqli_query($conn, 'SELECT SUM(`september`) as total9 FROM `billing`');
                                        $row = mysqli_fetch_array($Sep);
                                        $sum9 = $row['total9'];
                                        $_SESSION['total9'] = $sum9;

                                        $Oct = mysqli_query($conn, 'SELECT SUM(`october`) as total10 FROM `billing`');
                                        $row = mysqli_fetch_array($Oct);
                                        $sum10 = $row['total10'];
                                        $_SESSION['total10'] = $sum10;

                                        $Nov = mysqli_query($conn, 'SELECT SUM(`november`) as total11 FROM `billing`');
                                        $row = mysqli_fetch_array($Nov);
                                        $sum11 = $row['total11'];
                                        $_SESSION['total11'] = $sum11;

                                        $Dec = mysqli_query($conn, 'SELECT SUM(`december`) as total12 FROM `billing`');
                                        $row = mysqli_fetch_array($Dec);
                                        $sum12 = $row['total12'];
                                        $_SESSION['total12'] = $sum12;





                                        echo '	
                                         <tbody>
                                        	      <tr>
                                        	        <td>' . $sum1 .  '</td>
                                        	        <td>' . $sum2 .  '</td>
                                        	        <td>' . $sum3 .  '</td>
                                        	        <td>' . $sum4 .  '</td>
                                        	        <td>' . $sum5 .  '</td>
                                        	        <td>' . $sum6 .  '</td>
                                        	        <td>' . $sum7 .  '</td>
                                        	        <td>' . $sum8 .  '</td>
                                        	        <td>' . $sum9 .  '</td>
                                        	        <td>' . $sum10 .  '</td>
                                        	        <td>' . $sum11 .  '</td>
                                        	        <td>' . $sum12 .  '</td>

                                        	      </tr>
                                        	    </tbody>
                                        ';



                                        ?>
                                    </table>






                                </div>
                            </div>
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