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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../user/css/style1.css" rel="stylesheet">
    <style>
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
        
        .login {
            margin-left: 22px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h3 style="color: wheat;">Actions that can be performed <br> by the EMPLOYEE :</h3> <br><br><br>
            <a href="update.php">Update Profile</a>
            <a href="changepw.php">Change Password</a>
            <a href="dispatch/dispatch.html">Dispatch Post</a>
            <a href="postd/postd.html">Search Post</a> <br><br><br>
            <a style=" background-color:#818181b2; color: aqua; font-size:22px;" href="index.html"> EMPLOYEE HOME</a>
        </div>
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light">
                    <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>
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
        <!-- End Header -->
        <div class="login">

            <h3 style="margin-left:-190px;">Refill Details To UPDATE...</h3> <br>
            <form method="GET">
                <div>
                    <div style="display:inline" class="form-group name1 col-md-3 ">
                        <input type="text" name="empid" placeholder="Employee ID" required="required" />
                        <input type="password" name="password" placeholder="Password " required="required" />
                        <select name="gender">
                        <option disabled="disabled" selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                        <input type="text" name="designation" placeholder="Designation" required="required" />
                        <h5 class="address"> Address : </h5><textarea name="address" rows="4 " cols="60 "></textarea>
                    </div>
                    <div class="form-group name2 col-md-3 ">

                        <input type="text" name="empname" placeholder="Employee Name " required="required" />
                        <input type="password" name="password" placeholder="Confirm Password" required="required" />
                        <select name="qualification">
                        <option disabled="disabled" selected="selected">Qualification</option>
                        <option>B.Tech</option>
                        <option>B.Com</option>
                        <option>Degree</option>
                        <option>MCA</option>
                        <option>M.Tech</option>
                        <option>MS</option>
                    </select>
                        <input type="text" name="salary" placeholder="Salary" required="required" />
                    </div>
                    <div class="form-group name3 col-md-3 ">
                        <input type="email" name="email" placeholder="Email-ID " required="required " />

                        <input type="text" name="phone" placeholder="Contact Number" required="required" />
                        <input type="date" name="birth" placeholder="D-O-B:" required="required" />
                        <input type="text" name="basic_pay" placeholder="Basic Pay" required="required" />

                    </div>
                    <div style="margin:25px 0 0 250px; display: inline-block;" class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"> </span> &nbsp I Accept Terms & Conditions.</label> <br><br>
                        <button type="submit " name="submit" value="Sign Up" class="submit btn btn-primary btn-block btn-large ">UPDATE Me!!</button> <br>
                    </div>
                </div>
            </form>
        </div>
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
        if(isset($_GET['submit'])){
            $empid = $_GET['empid'];
            $empname = $_GET['empname'];
            $password = $_GET['password'];
            $birth = $_GET['birth'];
            $gender = $_GET['gender'];
            $address = $_GET['address'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $qualification = $_GET['qualification'];
            $designation = $_GET['designation'];
            $salary = $_GET['salary'];
            $basic_pay = $_GET['basic_pay'];
            $sql = "SELECT * FROM emp where empid='$empid'";
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
            
            $sql1 = "UPDATE emp SET empid='$empid', empname='$empname', password='$password', birth='$birth', gender='$gender',address='$address', email='$email', phone='$phone', qualification='$qualification', designation='$designation', salary='$salary', basic_pay='$basic_pay' WHERE empid='$empid'";
            $result1 = $conn->query($sql1);
            //header('Location: disno.php?postno=10'); 
            sleep(2);
            echo "<script>window.location.href='update.php'; alert('Updated ALL Ur Details! Thank YOU!!'); </script>";    
        }
        ?>

        <!-- End PHP ------------------------------------------------------------------------------------------------------->
        

        <!-- ======= Footer ======= -->
        <footer class="fixed-bottom " id="footer">
            <div class="container ">
                <div style="color: aliceblue; " class="copyright ">
                    &copy; Copyright <strong><span>E-POST OFFICE</span></strong>. All Rights Reserved &nbsp;&nbsp;| &nbsp;&nbsp;Designed By: &nbsp;<a href="https://google.com/ " target="_blank ">Lvly Pavi</a>
                    <div style="margin-top: 10px;">
                        <a style=" margin-right:0 " href="../logemp.html" target="_blank ">Already a Member? Sign IN!</a>
                    </div>
                </div>

            </div>
        </footer>
    </div>

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