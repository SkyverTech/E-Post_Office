<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-POST OFFICE</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        h4{
            font-size:30px;
            float:left;
            margin-left:200px;
        }
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        
        #main {
            transition: margin-left .5s;
            padding: 16px;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }
        
        table {
            padding: 1%;
            margin: 1px 0px;
            line-height: 19px;
            width: 100%;
            padding-bottom: 5%;
        }

        th {
            background-color: #9ACD32;
            padding: 1%;
            font-variant: small-caps;
            font-size: 80%;
            color: #ffffff;
            line-height: 18px;
            border-radius: 10px 10px 0 0;
            border-bottom: 2px solid #339933;
            border-right:  2px solid #ffffff;
        }

        th,
        tr td {
            text-align: center;
            border-right:  2px solid #ffffff;
        }

        th:first-child,
        tr td:first-child {
            text-align: left;
        }

        tr td {
            opacity: 0.6;
        }

        tr:hover td {
            opacity: 1;
            color: #339933;
            font-weight: bold;
            font-size: 80%;
            margin: 1px 1px;
            line-height: 18px;
            border-right:  2px solid #ffffff;
        }   

        td {
            background-color: #90EE90;
            padding-left: 1.5%;
            padding-right: 1.5%;
            font-size: 90%;
            border-bottom: 2px solid #ffffff;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h3 style="color: wheat;">Actions that can be performed <br> by the ADMIN :</h3> <br><br><br>
            <a href="postd.html">View Post Details</a>
            <a href="../empreg.html">New Employee Registration</a>
            <a href="empd.html"> View Employee Details</a>
            <a href="../sales.html">  Add New Sales Item</a> <br><br><br>
            <a style=" background-color:#818181b2; color: aqua; font-size:25px;" href="index.html"> ADMIN HOME</a>
        </div>
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light">
                    <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    <a href="../../index.html"><img src="../../assets/img/logo.png" alt="" class="img-fluid"></a><a href="../../index.html">E-POST OFFICE</a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="../../index.html">Log OUT</a>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <div id="main">
        <marquee style="margin-bottom:40px;" class="marquee" behavior="alternate">Welcome ADMIN !!!</marquee>
        <a href="empd.html"><img src="../img/back.png" alt="Go Back"></a> <br> <a href="empd.html"><h4 style="font-size:20px; margin:-25px 0px -10px 40px;" >Go Back</h4></a> 
        <h3 style="text-align:center;" class="img-fluid">Details about ALL Employees...</h3> <br>
        
        <!--PHP ---------------------------------------------------------------------------------- -->
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "epost";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM emp";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Employee ID</th><th>Employee Name</th><th>Password</th><th>Date Of Birth</th><th>Gender</th><th>Address</th><th>E-Mail</th><th>Phone Number</th><th>Qualification</th><th>Designation</th><th>Salary</th><th>Basic Pay</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["empid"]. "</td><td>" . $row["empname"]. "</td><td>" . $row["password"]. "</td><td>" . $row["birth"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["address"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["qualification"]. "</td><td>" . $row["designation"]. "</td><td>" . $row["salary"]. "</td><td>" . $row["basic_pay"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>

        <!-- End PHP ------------------------------------------------------------------------------------------------------->
    </div> <br><br> <br><br>
    <!-- ======= Footer ======= -->
    <footer id="footer">
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
    </script>
    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
    <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../../assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>

</body>

</html>