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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light">
                    <a href="../index.html"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a> <a href="../index.html">E-POST OFFICE</a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.html">Customer Home</a></li>
                    <li><a href="../index.html">Log OUT</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <div class="login">
        <h3>Buy STAMPS</h3> <br>
        <form method="GET">
            <div>
                <div style="display:inline" class="form-group name1 col-md-6 ">
                    <select name="select">
                        <option disabled="disabled" selected="selected">Select a STAMP</option>
                        <option>Stamp 1</option>
                        <option>Stamp 2</option>
                        <option>Stamp 3</option>
                        <option>Stamp 4</option>
                        <option>Stamp 5</option>
                        <option>Stamp 6</option>
                    </select>
                    <input type="text" name="amount" placeholder="Enter Amount" required="required" />
                    <h5 class="address">Present Address : </h5><textarea name="address" rows="4 " cols="65 "></textarea>
                </div>
                <div class="form-group name2 col-md-6 ">
                    <input type="text" name="item" placeholder="No. Of Items " required="required" />
                    <input type="text " name="card" placeholder="Card Details (Ex: XXXX-XXXX-XXXX-XXXX) " required="required " />
                    <h5 class="address">Permanent Address : </h5><textarea name="address" rows="4 " cols="65 "></textarea>
                </div>
                <div style="margin:-5px 0 0 -70px; display: inline-block;" class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"> </span> &nbsp Keep me Signed in</label> <br><br>
                    <button type="submit " name="submit" value="Sign Up" class="btn btn-primary btn-block btn-large ">BOOK!</button> <br>
                </div>
            </div>
        </form>
        <?php
            if(isset($_GET['submit'])){
                echo "<script>window.location.href='buy.php'; alert('Bought Successfully!!The Item Will Be Delivered To Your Address !!!');</script>";
            }
        ?>
    </div>
    <!-- ======= Footer ======= -->
    <footer class="fixed-bottom " id="footer">
        <div class="container ">
            <div style="color: aliceblue; " class="copyright ">
                &copy; Copyright <strong><span>E-POST OFFICE</span></strong>. All Rights Reserved &nbsp;&nbsp;| &nbsp;&nbsp;Designed By: &nbsp;<a href="https://google.com/ " target="_blank ">Lvly Pavi</a>   
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="# " class="back-to-top "><i class="icofont-simple-up "></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js "></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js "></script>
    <script src="../assets/vendor/php-email-form/validate.js "></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js "></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="../assets/vendor/venobox/venobox.min.js "></script>
    <script src="../assets/vendor/aos/aos.js "></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js "></script>

</body>

</html>