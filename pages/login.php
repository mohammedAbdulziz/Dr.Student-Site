<?php 
require_once "../includes/db_config.php";
$error="";
if(isset($_GET["submit"])){
    $email=$_GET["email"];
    $password=$_GET["password"];
    $admin_email="guest@g.com";
    $admin_password="1234";
    $students_query="select * from students";
    $doctors_query="select * from doctors";

    $s_results=mysqli_query($conn, $students_query);
    $d_results=mysqli_query($conn, $doctors_query);

    if($email==$admin_email && $password==$admin_password){
        header("Location:../Dashboards/admin.php");
    }

    while($row=mysqli_fetch_assoc($s_results)){
        $s_email =$row["email"];
        $s_password = $row["password"];
        if($email==$s_email && $password == $s_password){
            // echo "Student email $s_email and student password $s_password";
            header("Location:../Dashboards/studentpg.php?id=".$row["id"]);
        }
    }
    while($row=mysqli_fetch_assoc($d_results)){
        $d_email = $row["email"];
        $d_password= $row["password"];
        if($email==$d_email && $password ==$d_password){
            // echo "Doctor email $d_email and doctor password $d_password";
            header("Location:../Dashboards/doctor-pg.php?id=".$row["id"]);
        }
    }
    $error="Wrong Password! Try again";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Reminder</title>
    <link rel="stylesheet" href="../pages/Styles/styleLogin.css">
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
                    <input type="text" name="" id="searchText">
                </li>
                <!-- <li>
                    <h1>Doctors Reminder</h1>
                </li> -->
                <li>
                    <a href="#" id="arEnBtn">AR/ENG</a>
                    <!-- <input type="button" value="AR/ENG" id="arEnBtn"> -->
                    <!-- <input type="button" value="LOGIN" id="loginBtn"> -->
                    <!-- <a href="#" id="loginBtn">Login</a> -->
                </li>
            </ul>
            <h1>Doctors Reminder</h1>
        </div>
    </header>
    <main>
        <div id="loginCont">
            <img src="../Images/logo.png" alt="logo">
            <form action="#" method="get">
                <div class="formDiv">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="  Enter email">
                </div>
                <div class="formDiv">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="  Enter password">
                </div>
                <div class="formDiv">
                    <h3 style="color: red;"><?php echo $error?></h3>
                    <input type="submit" value="Login" id="logInBtn" name="submit">
                </div>
            </form>


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