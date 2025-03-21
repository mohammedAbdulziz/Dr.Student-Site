<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Reminder</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./style/doctor-pg.css">
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
                    <input type="button" value="Search" id="searchBtn">
                    <input type="search" name="" id="searchText">
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
                    <a href="../index.php" id="logOutBtn">Log Out</a>
                </li>
            </ul>
            <h1>Doctors Reminder</h1>
        </div>
    </header>
    <main>
        <div class="doctor-info">
            <h1>Your Profile</h1>
            <div id="doc-profile-pic">
                <img src="../Images/doctor-profile.jpg" alt="Doctor Profile Picture">
            </div>
            <h1>Status</h1>
            <div id="doc-status">
                <input type="radio" name="status" id="available">
                <label for="available" class="status-btn available">Available</label>
                <input type="radio" name="status" id="not-available">
                <label for="not-available" class="status-btn not-available">Not Available</label>
            </div>
            <div class="doctor-details">
                <h1>Information</h1>
                <div class="doctor-detail">
                    <strong>Name:</strong>
                    <input type="text" name="doctor-name" id="doctor-name" placeholder="T. Shahlaa` Al-Swailim">
                </div>
                <div class="doctor-detail">
                    <strong>Office Number:</strong>
                    <input type="text" name="doctor-office" id="doctor-office" placeholder="1.501.19">
                </div>
                <div class="doctor-detail">
                    <strong>
                        Course Name:
                    </strong>
                    <input type="text" name="doctor-course" id="doctor-course" placeholder="Python">
                </div>
                <div class="doctor-detail">
                    <strong>
                        Office Hours:
                    </strong>
                    <input type="text" name="doctor-hours" id="doctor-hours" placeholder="16" disabled>
                </div>
                <div class="doctor-detail">
                    <strong>Call forwarding:</strong>
                    <input type="text" name="doctor-phone" id="doctor-phone" placeholder="37362">
                </div>
                <div class="doctor-detail">
                    <strong>Email:</strong>
                    <input type="text" name="doctor-email" id="doctor-email" placeholder="saalswailim@pnu.edu.sa">
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
                    <strong>Sunday:</strong>
                    <span>First Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="f-start-sunday" id="f-start-sunday" value="09:00"> 
                        <span>to</span>
                        <input type="time" name="f-end-sunday" id="f-end-sunday" value="11:00"> 
                    </div>
                    <span>Second Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="s-start-sunday" id="s-start-sunday" value="14:00"> 
                        <span>to</span>
                        <input type="time" name="s-end-sunday" id="s-end-sunday" value="17:00"> 
                    </div>
                </div>
                <div class="schedule-info">
                    <strong>Monday:</strong>
                    <span>First Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="f-start-monday" id="f-start-monday" value="09:00"> 
                        <span>to</span>
                        <input type="time" name="f-end-monday" id="f-end-monday" value="11:00"> 
                    </div>
                    <span>Second Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="s-start-monday" id="s-start-monday" value="14:00"> 
                        <span>to</span>
                        <input type="time" name="s-end-monday" id="s-end-monday" value="17:00"> 
                    </div>
                </div>
                <div class="schedule-info">
                    <strong>Tuesday:</strong>
                    <span>First Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="f-start-tuesday" id="f-start-tuesday" value="09:00"> 
                        <span>to</span>
                        <input type="time" name="f-end-tuesday" id="f-end-tuesday" value="11:00"> 
                    </div>
                    <span>Second Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="s-start-tuesday" id="s-start-tuesday" value="14:00"> 
                        <span>to</span>
                        <input type="time" name="s-end-tuesday" id="s-end-tuesday" value="17:00"> 
                    </div>
                </div>
                <div class="schedule-info">
                    <strong>Wednesday:</strong>
                    <span>First Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="f-start-wednesday" id="f-start-wednesday" value="09:00"> 
                        <span>to</span>
                        <input type="time" name="f-end-wednesday" id="f-end-wednesday" value="11:00"> 
                    </div>
                    <span>Second Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="s-start-wednesday" id="s-start-wednesday" value="14:00"> 
                        <span>to</span>
                        <input type="time" name="s-end-wednesday" id="s-end-wednesday" value="17:00"> 
                    </div>
                </div>
                <div class="schedule-info">
                    <strong>Thursday:</strong>
                    <span>First Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="f-start-thursday" id="f-start-thursday" value="09:00"> 
                        <span>to</span>
                        <input type="time" name="f-end-thursday" id="f-end-thursday" value="11:00"> 
                    </div>
                    <span>Second Shift</span>
                    <div class="time-ctrl">
                        <input type="time" name="s-start-thursday" id="s-start-thursday" value="14:00"> 
                        <span>to</span>
                        <input type="time" name="s-end-thursday" id="s-end-thursday" value="17:00"> 
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
</body>

</html>