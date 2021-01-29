<?php
$dbserver = "127.0.0.1";
$dbdatabase = "test";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = " ";
$success = " ";

if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email_id_1 = $_POST['email_id_1'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile_no'];
    $package_type = $_POST['package_type'];
    $custreg = $_POST['custreg'];
    $custpassword = $_POST['custpassword'];

    $res = mysqli_query($conn, "INSERT into customer_info values('$first','$last','$email_id_1','$address','$mobile_no','$package_type','$custreg','$custpassword') ");

    if ($res) {
        echo "Congrats! You have added a customer";
    } else {
        echo "Something Went Wrong!.Please Check Again";
    }
}

?>

<!DOCTYPE html>

<head>
    <title>User Registration</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/bg.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->

    <script src="js/jquery2.0.3.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
</head>

<body>

    <div class="reg-w3">
        <div class="w3layouts-main">
            <center>
                <b>
                    <h4 style="color: red;"><?php echo $error; ?></h4>
                </b>
                <b>
                    <h4 style="color: green;"><?php echo $success; ?></h4>
                </b>
            </center>
            <h2>Register Now</h2>
            <form method="post">
                <input type="text" class="ggg" name="first" placeholder="First Name" required="true">

                <input type="text" class="ggg" name="last" placeholder="Last Name" required="true">

                <input type="email" class="ggg" name="email_id_1" placeholder="Primary Email Id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9-.-]+\.[a-z]{2,3}$">

                <input type="address" class="ggg" name="address" placeholder="Address">

                <input type="tel" class="ggg" name="mobile_no" placeholder="Mobile No." required="true">

                <h3>Input package type below<br></h3>

                <select id="cars" class="ggg" name="package_type">
                    <option value="5">5 MBPS</option>
                    <option value="10">10 MBPS</option>
                    <option value="15">15 MBPS</option>
                    <option value="20">20 MBPS</option>
                </select>


                <input type="text" class="ggg" name="custreg" placeholder="Customer Registration Id" required="true">

                <input type="password" class="ggg" name="custpassword" placeholder="Customer Password (More than 5 characters & only Digits)" required="true" pattern=".{5,}">

                <div class="clearfix"></div>
                <input type="submit" value="submit" name="submit">
            </form>


            <p>Go Back to Admin UI<a href="http://localhost/digitalbd/cms/admin/adminui.php">GO</a></p>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>

</body>

</html>