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

    <title>Digital-bd BILLING-INCOME</title>

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
    <style>
        .go {
            width: 100%;
            border: 5px solid red;
            position: right;
            text-transform: uppercase;
            text-align-last: center;

        }

        /* .table th {
            position: relative;
        } */

        .resizer {
            /* Displayed at the right side of column */
            position: absolute;
            top: 500;
            right: 500;
            width: 200px;
            cursor: col-resize;
            user-select: none;
        }
    </style>






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
                    <li class="active">
                        <a href="http://localhost/digitalbd/cms/admin/income.php"><i class="fa fa-fw fa-table"></i>Income</a>
                    </li>
                    <li>
                        <a href="http://localhost/digitalbd/cms/admin/expense.php"><i class="fa fa-fw fa-table"></i>Expense</a>
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
                            INCOME
                            <small>Statements</small>
                        </h1>
                        <ol class="breadcrumb">


                            <br>
                            <!-- Table -->


                            <form method="post">
                                <label>Select Month</label>
                                <select id="cars" class="ggg" name="month">

                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="Jul">Jul</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>

                                <input type="submit" value="Search" name="search">


                                <br>
                                <br>

                            </form>


                            <table class="table table-bordered">
                                <thead>
                                    <th>SL_NO</th>
                                    <th>Month</th>
                                    <th>Date & Time</th>
                                    <th>Description</th>
                                    <th>Amount</th>

                                    <br>

                                    <!-- <th><strong>Edit</strong></th>
                                        <th><strong>Delete</strong></th> -->

                                </thead>


                                <br>
                                <br>
                                <br>

                                <!-- Show DATA OF INCOME -->
                                <?php
                                $dbserver = "127.0.0.1";
                                $dbdatabase = "test";
                                $dbusername = "root";
                                $dbpassword = "";

                                $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);
                                if (isset($_POST['month'])) {
                                    $_SESSION['month'] = $_POST['month'];
                                    if ($_POST['month'] == "Jan") {
                                        $in_sql = "SELECT * FROM `income` where `month` ='Jan' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    } else if ($_POST['month'] == "Feb") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Feb' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }

                                    /////////////////////// MARCH////////////////
                                    else if ($_POST['month'] == "Mar") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Mar' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }

                                    /////////APRIL////////////////
                                    else if ($_POST['month'] == "Apr") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Apr' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    /////////////MAY///////////
                                    else if ($_POST['month'] == "May") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='May' ORDER BY `date_time` asc";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    //////////// June////////////////////
                                    else if ($_POST['month'] == "Jun") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Jun' ORDER BY `date_time` asc ";

                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    ///////////////JULY////////////
                                    else if ($_POST['month'] == "Jul") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Jul' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    ////////////////Aug/////////
                                    else if ($_POST['month'] == "Aug") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Aug' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    ///////////////Sept//////////
                                    else if ($_POST['month'] == "Sep") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Sep' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    /////////////Oct/////////
                                    else if ($_POST['month'] == "Oct") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Oct' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    ///////////NOV////////////
                                    else if ($_POST['month'] == "Nov") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Nov' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                    // ///////DECEMBER////////////
                                    else if ($_POST['month'] == "Dec") {

                                        $in_sql = "SELECT * FROM `income` where `month` ='Dec' ORDER BY `date_time` asc ";
                                        if ($result = $conn->query($in_sql)) {
                                            while ($rows = $result->fetch_assoc()) {
                                                echo '
                     <tbody>
                         <tr>
					        <td>' . $rows['SL_NO'] . '</td>
                            <td>' . $rows['month'] . '</td>
                            <td>' . $rows['date_time'] . '</td>
                            <td>' . $rows['description'] . '</td>
                            <td>' . $rows['amount'] . '</td>
                            
                          </tr>
                 </tbody>
                                            
              ';
                                            }
                                        }
                                    }
                                }

                                ?>
                            </table>


                            <table class="go">
                                <!------------ TOTAL INCOME PRINT ----------->
                                <th clas="go">Total Income Of
                                    <?php
                                    $dbserver = "127.0.0.1";
                                    $dbdatabase = "test";
                                    $dbusername = "root";
                                    $dbpassword = "";

                                    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);

                                    $months = $_SESSION['month'];

                                    echo $months;
                                    echo " ";
                                    echo " is: ";




                                    if ($_POST['month'] == NULL) {
                                        echo " ";
                                    } else if ($_POST['month'] == "Jan") {
                                        $Jan = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Jan" ');
                                        $row = mysqli_fetch_array($Jan);
                                        $sum1 = $row['total1'];
                                        $_SESSION['total1'] = $sum1;
                                        echo "  ";
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Feb") {
                                        $Feb = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Feb" ');
                                        $row = mysqli_fetch_array($Feb);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Mar") {
                                        $Mar = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Mar" ');
                                        $row = mysqli_fetch_array($Mar);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Apr") {
                                        $Apr = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Apr" ');
                                        $row = mysqli_fetch_array($Apr);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "May") {
                                        $May = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "May" ');
                                        $row = mysqli_fetch_array($May);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Jun") {
                                        $Jun = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Jun" ');
                                        $row = mysqli_fetch_array($Jun);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Jul") {
                                        $Jul = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Jul" ');
                                        $row = mysqli_fetch_array($Jul);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Aug") {
                                        $Aug = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Aug" ');
                                        $row = mysqli_fetch_array($Aug);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Sep") {
                                        $Sep = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Sep" ');
                                        $row = mysqli_fetch_array($Sep);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Oct") {
                                        $Oct = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Oct" ');
                                        $row = mysqli_fetch_array($Oct);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Nov") {
                                        $Nov = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Nov" ');
                                        $row = mysqli_fetch_array($Nov);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else if ($_POST['month'] == "Dec") {
                                        $Dec = mysqli_query($conn, 'SELECT SUM(`amount`) as total1 FROM `income` where month = "Dec" ');
                                        $row = mysqli_fetch_array($Dec);
                                        $sum1 = $row['total1'];
                                        echo "  ";
                                        $_SESSION['total1'] = $sum1;
                                        echo $sum1;
                                    } else {
                                        echo "Selcet Month";
                                    }
                                    echo " TK"




                                    ?>
                                </th>
                            </table>
                            <!------------END TOTAL INCOME PRINT ----------->


                            <!-- End Show DATA OF INCOME -->








                            <!-- End Table -->
                        </ol>
                        <!-- Add New Bill -->
                        <form method="post">
                            <table id="resizeMe" class="table">
                                <thead id="inner">
                                    <th>
                                        <input type="text" class="ggg" name="slno" value="<?php echo rand(5, 10000); ?>">
                                    </th>

                                    <th>
                                        <select name="month">
                                            <option value="<?php print_r($_SESSION['month']); ?>"><?php print_r($_SESSION['month']); ?> </option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="Jul">Jul</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                    </th>


                                    <th>
                                        <input type="text" class="ggg" name="date" value="<?php $date = date('d-m-y');
                                                                                            echo $date; ?>">
                                    </th>


                                    <th>
                                        <input type="text" class="ggg" name="description" placeholder="Description">
                                    </th>


                                    <th>
                                        <input type="text" class="ggg" name="amount" placeholder="Amount">
                                    </th>


                                    <th>
                                        <input type="submit" value="Submit" name="submit">
                                    </th>
                                    <th>
                                        <button onClick="http:/localhost/digitalbd/cms/admin/income.php">Refresh Page</button>
                                    </th>
                                </thead>
                            </table>
                            <table>
                                <button onClick="window.print()">Print Data</button>
                            </table>
                        </form>

                        <?php
                        $dbserver = "127.0.0.1";
                        $dbdatabase = "test";
                        $dbusername = "root";
                        $dbpassword = "";
                        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);




                        if (isset($_POST['submit'])) {
                            $slno = $_POST['slno'];
                            $month = $_POST['month'];
                            $date = $_POST['date'];
                            $description = $_POST['description'];
                            $amount = $_POST['amount'];

                            $res = mysqli_query($conn, "INSERT into income values('$slno','$month','$date','$description','$amount')");
                        }

                        ?>
                        <!-- End Add New Bill -->

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
    <script src="./Digitalbd/cms/admin/js/jquery-1.3.2.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>