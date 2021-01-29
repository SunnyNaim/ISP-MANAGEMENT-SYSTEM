 <?php
    $dbserver = "127.0.0.1";
    $dbdatabase = "test";
    $dbusername = "root";
    $dbpassword = "";

    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbdatabase);
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";

    // Login Page Connect
    // if (isset($_POST['login'])) {
    //     $myusername = $_POST['username'];
    //     $mypassword = $_POST['password'];

    //     $sql = "SELECT * FROM admin_info WHERE username = '$myusername' and password = '$mypassword'";

    //     $result = mysqli_query($conn, $sql);
    //     $count = mysqli_num_rows($result);
    //     $user = mysqli_fetch_assoc($result);
    //     if ($count == 1) {
    //         $_SESSION['login_user'] = $myusername;
    //         header("location: http://localhost/digitalbd/cms/admin/adminui.php");
    //     } else {
    //         echo "Wrong User or pass";
    //     }
    // }




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $myusername = mysqli_real_escape_string($conn, $_POST['username']);
        $mypassword = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM admin_info WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if ($count == 1) {

            $_SESSION['login_user'] = $myusername;
            header("location: http://localhost/digitalbd/cms/admin/adminui.php");
        }
    }
    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Login V3</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--===============================================================================================-->
     <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <!--===============================================================================================-->
 </head>

 <body>

     <div class="limiter">
         <div class="container-login100" style="background-image: url('images/main.jpg');">
             <div class="wrap-login100">
                 <form action="" class="login100-form validate-form" method="POST">
                     <span class="login100-form-logo">
                         <i class="zmdi zmdi-landscape"></i>
                     </span>

                     <span class="login100-form-title p-b-34 p-t-27">
                         Admin Log in
                     </span>


                     <div class="wrap-input100 validate-input" data-validate="Enter username">
                         <input class="input100" type="text" name="username" placeholder="Username">
                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                     </div>

                     <div class="wrap-input100 validate-input" data-validate="Enter password">
                         <input class="input100" type="password" name="password" placeholder="Password">
                         <span class="focus-input100" data-placeholder="&#xf191;"></span>
                     </div>
                     <span class="input100">
                         <center>
                             <h3>
                                 <?php

                                    ?>
                             </h3>
                         </center>

                     </span>


                     <div class="container-login100-form-btn">
                         <button class="login100-form-btn" name="login">
                             Login
                         </button>
                     </div>

                     <span class="login100-form-title p-b-34 p-t-27">
                         <a class="txt1" href="http://localhost/Digitalbd/index.html">
                             <b>Go Back To Main WebPage</b>
                         </a>
                     </span>

                 </form>
             </div>

         </div>
     </div>
     </div>



     <div id="dropDownSelect1"></div>

     <!--===============================================================================================-->
     <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/animsition/js/animsition.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/bootstrap/js/popper.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/select2/select2.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/daterangepicker/moment.min.js"></script>
     <script src="vendor/daterangepicker/daterangepicker.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/countdowntime/countdowntime.js"></script>
     <!--===============================================================================================-->
     <script src="js/main.js"></script>

 </body>

 </html>