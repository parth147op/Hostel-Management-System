<?php
session_start();
include('connect.php');
include('checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main-Page</title>
    <link rel="stylesheet" href="./main_page.css">
    <script src="https://kit.fontawesome.com/e2f7be78fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=EB+Garamond&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('header.php')?>    
<p>_____________________________________________________________________________________________________________________________________</p>
    <section id="servicesMain">

        <h2 class="heading">SERVICES</h2>
        <div id="services">
            <div class="firlayer">
                <div class="box">
                    <!-- <h3 class="servtitle">BOOK HOSTEL</h3> -->
                    <a href="book_hostel.php">BOOK HOSTEL</a>
                    <div class="icon"><i class="fa-solid fa-hotel"></i></div>
                </div>

                <div class="box">
                    <!-- <h3 class="servtitle">ROOM DETAILS</h3> -->
                    <a href="rooms.php">ROOM DETAILS</a>
                    <div class="icon"><i class="fa-solid fa-house"></i></div>
                </div>

                <div class="box">
                    <!-- <h3 class="servtitle">ROOM MANAGEMENT</h3> -->
                    <a href="add_room.php">ADD ROOMS</a>
                    <div class="icon"><i class="fa-solid fa-plus"></i></div>
                </div>
            <!-- </div> -->


            <!-- <div class="seclayer"> -->
                <div class="box">
                    <!-- <h3 class="servtitle">MEAL MANAGEMENT</h3> -->
                    <a href="manage_students.php">MANAGE STUDENTS</a>
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                </div>

                <div class="box">
                    <!-- <h3 class="servtitle">COST MANAGEMENT</h3> -->
                    <a href="admin.php">UPDATE PROFILE</a>
                    <div class="icon"><i class="fa-solid fa-wallet"></i></div>

                </div>
            </div>
        </div>
    </section>

    <p>_____________________________________________________________________________________________________________________________________</p>
    
    <section id="contact">
        <div class="contact1">
        <div class="contact" style="float: left; width:600px; margin-right:30px; margin-top:20px;">
        <h1 class="heading"> CONTACT US</h1>

<p>For more updates regarding our projects.</p>

<div class="inputcontainer" style="margin: 40px;">
    <input type="email" placeholder="enter email" name="email" style="width: 100%;">
    <button type="submit" disabled><i class="fab fa-telegram-plane"></i></button>
</div>
        </div>
        </div>
        <!-- <p>Or</p> -->
        

    </section>
</body>
<footer class="w3-center w3-black w3-padding-16" style="height:100px">
   

    </div>
        <div class="webtech" style="float: left; padding-left:10px">
            <p>Web Technology Project</p>
        </div>
        <div class="pdpu" style="float: right; padding-right:10px">
            <p>PDPU Project</p>
        </div>
    
</footer>

</html>