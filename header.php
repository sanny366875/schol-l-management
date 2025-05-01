<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- header section -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                       <a href="index.php"> <img src="img/images.jpg" alt="School Logo" class="w-100"></a>
                    </div>
                </div>

            <!-- mobile_menu start-->
             <div class="mobile_menu">
             <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>

            <button class="openbtn" onclick="openNav()">☰ Toggle Sidepanel</button> 
             </div>
            <!-- mobile_menu end-->

                <div class="col-md-10">
                    <div class="menu">
                       <ul>
                        <li title="Home"><a href="index.php">Home</a></li>
                        <li title="Menu"><a href="">Menu</a>
                            <!-- sub-menu -->
                            <ul class="submenu">
                                <li title="Sudent information"><a href="all_users.php">Sudent information</a></li>
                                <li title="Teachers information"><a href="teacheers.php">Teachers Information</a></li>
                                <li title="Guardian information"><a href="#">Guardian Information</a></li>
                                <li title="Result  Summary"><a href="#">Result  Summary</a></li>
                                <li title="Payment Information"><a href="#">Payment Information</a></li>
                            </ul>
                        </li>
                        <li title="log in"><a href="login.php">Log In</a></li>
                        <li title="Registration"><a href="registration.php">Registration</a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header-section end -->

<script src="js/script.js"></script>
    