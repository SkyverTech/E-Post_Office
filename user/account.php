<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-POST OFFICE</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
         #main {
            transition: margin-left .5s;
            padding: 16px;
        }
        .savings{
            
            margin-left:140px;
        }
        input[type="submit"] {
            float: right;
            background: #1bac91;
            border: 0;
            margin-right: 400px;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }
        
        input[type="submit"]:hover {
            background: #22d8b6;
        }
        input[type="radio"] {
            display: none;
        }
        
        label {
            font-size: 18px;
            cursor: pointer;
            margin: 15px 10px;
        }
        
        label:before {
            content: '';
            display: inline-block;
            height: 30px;
            width: 30px;
            background: coral;
            border-radius: 50%;
            z-index: 2;
            transition: box-shadow .4s ease, background .3s ease;
        }
        
        input:checked+label:before {
            box-shadow: inset 0px 3px 0 2px rgba(89, 202, 89, 1);
            background: #fff;
        }
        .back{
            float:right;
            margin-right:20px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">
            <div class="logo mr-auto">
                <h1 class="text-light">
                    <a href="../index.html"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a><a href="../index.html">E-POST OFFICE</a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="../index.html">Log OUT</a>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <div id="main">
        <marquee class="marquee" behavior="alternate">Welcome CUSTOMER !!!</marquee> <br> <br>
        <div class="savings">
        <div class="back">
            <a href="index.html"><img src="../admin/img/back.png" alt="User Home"></a> <br> <a href="index.html"><h4 style="font-size:20px; margin:-25px 0px -10px 40px;" >User Home Page</h4></a> 
        </div>  <br>
            <h3 style="margin-left:-100px; "> Create Your Savings Account : </h3> <br> <br>
            <form method="GET">
                <input class="w3-input w3-animate-input" style="display:inline; width:18%; max-width:27%" type="text" id="uid" name="uid" placeholder="Enter Your Customer ID">  <br> <br>
                <input class="w3-input w3-animate-input" style="display:inline; width:50%; max-width:27%" type="text" id="pass" name="pass" placeholder="Enter Your Savings Account Password"> 
                <input id="submit" name="submit" type="submit" value="Create" class="submit">
            </form>
        </div>
    </div>
    <!--PHP ---------------------------------------------------------------------------------- -->
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "epost";
            $saving= 'yes';
            $table_name = "savings";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            if(isset($_GET['submit'])){
                $pass = $_GET['pass'];
                $uid = $_GET['uid'];
                $sql = "SELECT saving FROM savings where uid='$uid'";
                $result = $conn->query($sql);
                    if($saving=='yes'){
                        echo "<script>window.location.href='savings.html'; alert('You already have account!  Redirecting You to bank page!!');</script>";
                    }
                    else{
                            $query = "INSERT INTO savings SET uid='$uid', pass='$pass', saving='$saving'";
                            if ($conn->query($query) === TRUE) {
                                echo "<script> alert('Account Created Successfully. Redirecting You to bank page!!');</script>";
                            }
                    }      
            }
                $conn->close();
        ?>
        <!-- End PHP ------------------------------------------------------------------------------------------------------->
    <footer class="fixed-bottom" id="footer">
        

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>E-POST OFFICE</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
                Designed by <a href="https://google.com/" target="_blank">Lvly Pavi</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }

        function idForm() {
            var selectvalue = $('input[name=rads]:checked', '#idForm').val();
             else if (selectvalue == "rad2") {
                window.open('savings.html', '_self');
                return true;
            }
        };
    </script>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>
</html>