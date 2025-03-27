 <?php
    require_once '../includes/db_config.php';

    $id = $_GET['id'];


    $sql = "select * from doctors where id=$id";
    $sql_schedule = "select * from doctor_schedule where id=$id";

    $result = mysqli_query($conn, $sql);
    $result_schedule = mysqli_query($conn, $sql_schedule);

    $row = mysqli_fetch_assoc($result);
    $row_schedule = mysqli_fetch_assoc($result_schedule);
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Doctors Reminder</title>
     <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet" href="./style/doctor-pg.css">
     <link rel="stylesheet" href="./style/doctor-profile.css">
     <link rel="icon" href="../Images/logo.png" type="image/x-icon">
     <script src="https://kit.fontawesome.com/6362050fec.js" crossorigin="anonymous"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
         rel="stylesheet">

 </head>

 <body>
     <header>
         <div id="topHeader">
             <div id="logo">
                 <img src="../Images/logo.png" alt="logo">
             </div>
             <!-- Navigiation Menu -->
             <ul>
                 <li>
                     <form action="/Dashboards/functions/search.php" method="get">
                         <input type="submit" value="Search" name="submit" id="searchBtn">
                         <input type="search" name="search_term" id="searchText" placeholder="Enter Search Term">
                     </form>
                 </li>
                 <!-- <li>
                    <h1>Doctors Reminder</h1>
                </li> -->
                 <li>
                     <a href="#" id="arEnBtn">AR/ENG</a>
                     <!-- <input type="button" value="AR/ENG" id="arEnBtn"> -->
                     <!-- <input type="button" value="LOGIN" id="loginBtn"> -->
                     <!-- <a href="./pages/login.html" id="loginBtn">Login</a> -->
                     <a href="../pages/faq.php" id="faqBtn">FAQ</a>
                     <a href="../index.php" id="logOutBtn">Go Home</a>
                 </li>
             </ul>
             <h1>Doctors Reminder</h1>
         </div>
     </header>
     <main>
         <div class="doctor-info">
             <h1><?php echo $row['name']; ?></h1>
             <div id="doc-profile-pic">
                 <img src="../Images/doctor-profile1.jpg" alt="Doctor Profile Picture">
             </div>
             <h1>Status</h1>
             <div id="doc-status">
                 <!-- <input type="radio" name="status" id="available"> -->
                 <label for="available" class="status-btn available <?php if ($row_schedule['status'] == "available") {
                                                                        echo "active";
                                                                    } else {
                                                                        echo "";
                                                                    } ?>">Available</label>
                 <!-- <input type="radio" name="status" id="not-available"> -->
                 <label for="not_available" class="status-btn not-available <?php if ($row_schedule['status'] == "not_available") {
                                                                                echo "active";
                                                                            } else {
                                                                                echo "";
                                                                            } ?>">Not Available</label>
             </div>
             <div class="doctor-details">
                 <h1>Information</h1>
                 <div class="doctor-detail">
                     <strong>Name:</strong>
                     <input type="text" name="doctor-name" id="doctor-name" placeholder="<?php echo $row['name']; ?>" disabled>
                 </div>
                 <div class="doctor-detail">
                     <strong>Office Number:</strong>
                     <input type="text" name="doctor-office" id="doctor-office" placeholder="<?php echo $row['office']; ?>" disabled>
                 </div>
                 <div class="doctor-detail">
                     <strong>
                         Course Name:
                     </strong>
                     <input type="text" name="doctor-course" id="doctor-course" placeholder="<?php echo $row['course']; ?>" disabled>
                 </div>
                 <div class="doctor-detail">
                     <strong>
                         Office Hours:
                     </strong>
                     <input type="number" name="doctor-hours" id="doctor-hours" placeholder="16" disabled>
                 </div>
                 <div class="doctor-detail">
                     <strong>Call forwarding:</strong>
                     <input type="number" name="doctor-phone" id="doctor-phone" placeholder="<?php echo $row['phone_number']; ?>" disabled>
                 </div>
                 <div class="doctor-detail">
                     <strong>Email:</strong>
                     <input type="email" name="doctor-email" id="doctor-email" placeholder="<?php echo $row['email']; ?>" disabled>
                 </div>
                 <div class="doctor-detail">
                     <input type="button" value="Update" id="doctor-update">
                 </div>
             </div>
         </div>
         <div class="doctor-schedule">
             <h1>Schedule</h1>
             <div class="schedule-infos">
                 <div class="schedule-info">
                     <strong>Saturday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="sat_fs" class="s" value="<?php echo $row_schedule['sat_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="sat_fe" class="e" value="<?php echo $row_schedule['sat_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="sat_ss" class="s" value="<?php echo $row_schedule['sat_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="sat_se" class="e" value="<?php echo $row_schedule['sat_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <strong>Sunday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="sun_fs" class="s" value="<?php echo $row_schedule['sun_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="sun_fe" class="e" value="<?php echo $row_schedule['sun_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="sun_ss" class="s" value="<?php echo $row_schedule['sun_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="sun_se" class="e" value="<?php echo $row_schedule['sun_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <strong>Monday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="mon_fs" class="s" value="<?php echo $row_schedule['mon_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="mon_fe" class="e" value="<?php echo $row_schedule['mon_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="mon_ss" class="s" value="<?php echo $row_schedule['mon_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="mon_se" class="e" value="<?php echo $row_schedule['mon_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <strong>Tuesday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="tue_fs" class="s" value="<?php echo $row_schedule['tue_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="tue_fe" class="e" value="<?php echo $row_schedule['tue_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="tue_ss" class="s" value="<?php echo $row_schedule['tue_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="tue_se" class="e" value="<?php echo $row_schedule['tue_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <strong>Wednesday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="wed_fs" class="s" value="<?php echo $row_schedule['wed_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="wed_fe" class="e" value="<?php echo $row_schedule['wed_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="wed_ss" class="s" value="<?php echo $row_schedule['wed_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="wed_se" class="e" value="<?php echo $row_schedule['wed_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <strong>Thursday:</strong>
                     <span>First Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="thu_fs" class="s" value="<?php echo $row_schedule['thu_fs'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="thu_fe" class="e" value="<?php echo $row_schedule['thu_fe'] ?>" disabled>
                     </div>
                     <span>Second Shift</span>
                     <div class="time-ctrl">
                         <input type="time" name="thu_ss" class="s" value="<?php echo $row_schedule['thu_ss'] ?>" disabled>
                         <span>to</span>
                         <input type="time" name="thu_se" class="e" value="<?php echo $row_schedule['thu_se'] ?>" disabled>
                     </div>
                 </div>
                 <div class="schedule-info">
                     <input type="button" value="Update Schedule" id="doctor-update-schedule">
                 </div>
             </div>
         </div>
     </main>
     <footer>
         <div id="contactInfo">
             <p><i class="fa-solid fa-envelope"></i> pnu-tawasul@pnu.edu.sa</p>
             <p><i class="fa-solid fa-phone"></i> +966-11-8220000</p>
             <p><i class="fa-solid fa-location-dot"></i> Airport Road, King Khalid International Airport, Riyadh 11564,
                 Saudi Arabia</p>
         </div>
         <h4> © 2025 - All Rights Reserved Doctors reminder</h4>
         <div id="social">
             <a href="https://pnu.edu.sa/ar/Pages/Home.aspx" target="_blank"><i
                     class="fa-solid fa-building-columns"></i></a>
             <a href="https://www.facebook.com/PNUKSA0/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
             <a href="https://www.instagram.com/_PNU_KSA/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
             <a href="https://www.youtube.com/channel/UC-0BTuZ46ApPXt6dWONTyGg" target="_blank"><i
                     class="fa-brands fa-youtube"></i></a>
             <a href="https://x.com/_PNU_KSA" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
         </div>
     </footer>
     <script src="../script.js"></script>
     <script src="../Dashboards/scripts/doctor-profile-script.js"></script>
 </body>

 </html>