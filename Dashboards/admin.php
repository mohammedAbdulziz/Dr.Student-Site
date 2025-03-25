<?php require_once '../includes/db_config.php';
$query_students = "select * from students";
$query_doctors = "select * from doctors";
$result_students = mysqli_query($conn, $query_students);
$result_doctors = mysqli_query($conn, $query_doctors)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Reminder</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./style/admin.css">
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
        <div class="manage-accounts">
            <h1>Manage Accounts</h1>
            <div class="new-account">
                <input type="button" value="Create new account" id="create-account-btn">
            </div>
            <div class="account-filter">
                <input type="button" value="Students" class="btn active" id="studentBtn">
                <input type="button" value="Doctors" class=" btn" id="doctorBtn">
            </div>
            <div class="accounts-table " id="doctors">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Doctor ID</th>
                        <th>Office</th>
                        <th>Course</th>
                        <th>Call forwarding</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result_doctors)) {

                    ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["office"]; ?></td>
                            <td><?php echo $row["course"]; ?></td>
                            <td><?php echo $row["phone_number"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td><button><?php echo "<a href='/Dashboards/functions/doctorDelete.php?id=" . $row["id"] . "'>Delete</a>" ?></button></td>
                            <td><button class="doctor-edit">Edit</button></td>
                        </tr>
                        <tr id="doctorEditRow<?php echo $row["id"];?>">
                            <form action="/Dashboards/functions/doctorUpdate.php" method="post">
                                <td><input type="text" name="name" id="doctor-name" value="<?php echo $row["name"]?>"></td>
                                <td><input type="number" name="id" id="doctor-id" value="<?php echo $row["id"]?>" style="visibility: hidden;"></td>
                                <td><input type="text" name="office" id="doctor-office" value="<?php echo $row["office"]?>"></td>
                                <td><input type="text" name="course" id="doctor-course" value="<?php echo $row["course"]?>"></td>
                                <td><input type="number" name="phone_number" id="doctor-number" value="<?php echo $row["phone_number"]?>"></td>
                                <td><input type="email" name="email" id="doctor-email" value="<?php echo $row["email"]?>"></td>
                                <td><input type="password" name="password" id="doctor-password" value="<?php echo $row["password"]?>"></td>
                                <td><button type="button">Cancel</button></td>
                                <td><input type="submit" value="Update " name="submit"></td>
                            </form>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
            <div class="accounts-table active" id="students">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Major</th>
                        <th>Year</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result_students)) {

                    ?>
                        <tr>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["major"] ?></td>
                            <td><?php echo $row["year"] ?></td>
                            <td><?php echo $row["phone_number"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["password"] ?></td>
                            <td><button><?php echo "<a href='/Dashboards/functions/studentDelete.php?id=" . $row["id"] . "'>Delete</a>" ?></button></td>
                            <td><button class="student-edit">Edit</button></td>
                        </tr>
                        <tr id="studentEditRow<?php echo$row["id"]?>">
                            <form action="/Dashboards/functions/studentUpdate.php" method="post">

                                <td><input type="text" name="name" id="student-name" value="<?php echo $row["name"] ?>"></td>
                                <td><input type="number" name="id" id="student-id" value="<?php echo $row["id"] ?>" style="visibility: hidden;"></td>
                                <td><input type="text" name="major" id="student-major" value="<?php echo $row["major"] ?>"></td>
                                <td><input type="text" name="year" id="student-year" value="<?php echo $row["year"] ?>"></td>
                                <td><input type="number" name="phone_number" id="student-number" value="<?php echo $row["phone_number"] ?>"></td>
                                <td><input type="email" name="email" id="student-email"
                                        value=" <?php echo $row["email"] ?>"></td>
                                <td><input type="password" name="password" id="student-password" value="<?php echo $row["password"] ?>"></td>
                                <td><button type="button">Cancel</button></td>
                                <td><input type="submit" value="Update " name="submit"></td>
                            </form>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>
        <div class="manage-faq">
            <h1>Manage FAQ</h1>
            <input type="button" value="Manage FAQ">
        </div>
        <div class="create-account-pg">
            <h1>Create New Account</h1>
            <div class="accBtnType">
                <input type="button" value="Student" class="btn active" id="studentBtn">
                <input type="button" value="Doctor" class="btn" id="doctorBtn">
            </div>
            <form action="/Dashboards/functions/studentPost.php" class="student-create active" method="post">
                <div class="formDiv">
                    <label for="Name">Name:</label>
                    <input type="text" name="name" id="studentName">
                </div>
                <div class="formDiv">
                    <label for="Name">ID:</label>
                    <input type="text" name="id" id="studentId">
                </div>
                <div class="formDiv">
                    <label for="Name">Major:</label>
                    <input type="text" name="major" id="studentMajor">
                </div>
                <div class="formDiv">
                    <label for="Name">Year:</label>
                    <input type="text" name="year" id="studentYear">
                </div>
                <div class="formDiv">
                    <label for="Name">Phone Number:</label>
                    <input type="number" name="phone_number" id="studentPhone">
                </div>
                <div class="formDiv">
                    <label for="Name">Profile Picture:</label>
                    <input type="file" name="profile" id="studentProfile">
                </div>
                <div class="formDiv">
                    <label for="Name">Email:</label>
                    <input type="email" name="email" id="studentEmail">
                </div>
                <div class="formDiv">
                    <label for="Name">Password:</label>
                    <input type="password" name="password" id="studentPassword">
                </div>
                <div class="formDiv">
                    <input type="submit" value="Save" name="submit">
                    <input type="button" value="Cancel">
                </div>
            </form>
            <form action="/Dashboards/functions/doctorPost.php" class="doctor-create" method="post">
                <div class="formDiv">
                    <label for="Name">Name:</label>
                    <input type="text" name="name" id="doctorName">
                </div>
                <div class="formDiv">
                    <label for="id">Doctor ID:</label>
                    <input type="number" name="id" id="doctorID">
                </div>
                <div class="formDiv">
                    <label for="Name">Office:</label>
                    <input type="text" name="office" id="doctorOffice">
                </div>
                <div class="formDiv">
                    <label for="Name">Course:</label>
                    <input type="text" name="course" id="doctorCourse">
                </div>
                <div class="formDiv">
                    <label for="Name">Call-forwarding:</label>
                    <input type="number" name="phone_number" id="doctorPhone">
                </div>
                <div class="formDiv">
                    <label for="Name">Profile Picture:</label>
                    <input type="file" name="profile" id="doctorProfile">
                </div>
                <div class="formDiv">
                    <label for="Name">Email:</label>
                    <input type="email" name="email" id="doctorEmail">
                </div>
                <div class="formDiv">
                    <label for="Name">Password:</label>
                    <input type="password" name="password" id="doctorPassword">
                </div>
                <div class="formDiv">
                    <input type="submit" value="Save" name="submit">
                    <input type="button" value="Cancel">
                </div>
            </form>
        </div>
        <div class="createAccPgBC"></div>
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
    <script src="./scripts/admin.js"></script>
</body>

</html>