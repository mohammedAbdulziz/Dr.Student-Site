<?php
require_once "../includes/db_config.php";
$id=$_GET["id"];
$sql="select * from `students` where id=$id";

$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
// print_r($row);
$profile_picture;
if($row["profile_picture"]==null){
    $profile_picture="../Images/student-profile.jpeg";
}
else{
    $profile_picture="../Images/".$row["profile_picture"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Reminder</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./style/studentpg.css">
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
    <div class="title">
        <h1>Your Profile</h1>
        <h2>Contact A Doctor</h2>
    </div>
    <main>
        <div class="student-details">
            <p class="student-detail">
                <img src=<?php echo $profile_picture; ?> alt="Profile Picture" id="student-picture">
            </p>
            <p class="student-detail">
                <strong>Name: </strong>
                <span id="student-name"><?php echo $row["name"];?></span>
            </p>
            <p class="student-detail">
                <strong>ID: </strong>
                <span id="student-id"><?php echo $row["id"];?></span>
            </p>
            <p class="student-detail">
                <strong>Major: </strong>
                <span id="student-major"><?php echo $row["major"];?></span>
            </p>
            <p class="student-detail">
                <strong>Year: </strong>
                <span id="student-year"><?php echo $row["year"];?></span>
            </p>
            <p class="student-detail">
                <strong>Email: </strong>
                <a href="mailto:abeer@pnu.edu.sa" id="student-email"><?php echo $row["email"];?></a>
            </p>
            <p class="student-detail">
                <strong>Phone Number: </strong>
                <a href="tel:+96618811111" id="student-phone"><?php echo $row["phone_number"];?></a>
            </p>
        </div>
        <div class="doctors-scroll">
            <div class="doctor-info">
                <p>
                    <Strong>Name: </Strong>
                    <span id="doctor-name">Dr. Nahid Ahmed Ali</span>
                </p>
                <p>
                    <Strong>Office-Id: </Strong>
                    <span id="doctor-office">1.501.31</span>
                </p>
                <p>
                    <strong>Call forwarding: </strong>
                    <a href="tel:41448" id="doctor-phone">41448</a>
                </p>
                <p>
                    <strong>Email: </strong>
                    <a href="mailto:naaali@pnu.edu.sa" id="doctor-email">naaali@pnu.edu.sa</a>
                </p>
                <a href="./doctor-profile.php" target="_blank" id="doctor-profile">Profile</a>
            </div>
            <div class="doctor-info">
                <p>
                    <Strong>Name: </Strong>
                    <span id="doctor-name">Dr. Ennas Hilali</span>
                </p>
                <p>
                    <Strong>Office-Id: </Strong>
                    <span  id="doctor-office">1.501.02</span>
                </p>
                <p>
                    <strong>Call forwarding: </strong>
                    <a href="tel:41543" id="doctor-phone">41543</a>
                </p>
                <p>
                    <strong>Email: </strong>
                    <a href="mailto:imalihilali@pnu.edu.sa" id="doctor-email" >imalihilali@pnu.edu.sa</a>
                </p>
                <a href="./doctor-profile.php" target="_blank" id="doctor-profile">Profile</a>
            </div>
            <div class="doctor-info">
                <p>
                    <Strong>Name: </Strong>
                    <span id="doctor-name">Dr. Ameenah Maqdesh</span>
                </p>
                <p>
                    <Strong>Office-Id: </Strong>
                    <span  id="doctor-Office">1.501.23</span>
                </p>
                <p>
                    <strong>Call forwarding</strong>
                    <a href="tel:41498" id="doctor-phone">41498</a>
                </p>
                <p>
                    <strong>Email: </strong>
                    <a href="mailto:ASMagdich@pnu.edu.sa" id="doctor-email">ASMagdich@pnu.edu.sa</a>
                </p>
                <a href="./doctor-profile.php" target="_blank" id="doctor-profile">Profile</a>
            </div>
            <div class="doctor-info">
                <p>
                    <Strong>Name: </Strong>
                    <span id="doctor-name">T. Hind Al-Nahidh</span>
                </p>
                <p>
                    <Strong>Office-Id: </Strong>
                    <span  id="doctor-Office">1.501.17</span>
                </p>
                <p>
                    <strong>Call forwarding</strong>
                    <a href="tel:37363" id="doctor-phone">37363</a>
                </p>
                <p>
                    <strong>Email: </strong>
                    <a href="mailto:hsannahidh@pnu.edu.sa" id="doctor-email">hsannahidh@pnu.edu.sa</a>
                </p>
                <a href="./doctor-profile.php" target="_blank" id="doctor-profile">Profile</a>
            </div>
            <div class="doctor-info">
                <p>
                    <Strong>Name: </Strong>
                    <span id="doctor-name">T. Shahlaa` Al-Swailim</span>
                </p>
                <p>
                    <Strong>Office-Id: </Strong>
                    <span  id="doctor-Office">1.501.19</span>
                </p>
                <p>
                    <strong>Call forwarding</strong>
                    <a href="tel:37362" id="doctor-phone">37362</a>
                </p>
                <p>
                    <strong>Email: </strong>
                    <a href="mailto:saalswailim@pnu.edu.sa" id="doctor-email">saalswailim@pnu.edu.sa</a>
                </p>
                <a href="./doctor-profile.php" target="_blank" id="doctor-profile">Profile</a>
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