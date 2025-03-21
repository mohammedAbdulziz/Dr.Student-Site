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
                <input type="button" value="Student" class="btn active" id="studentBtn">
                <input type="button" value="Doctor" class=" btn" id="doctorBtn">
            </div>
            <div class="accounts-table " id="doctors">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Office</th>
                        <th>Course</th>
                        <th>Call forwarding</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>T. Shahlaa` Al-Swailim</td>
                        <td>1.501.19</td>
                        <td>Python</td>
                        <td>37362</td>
                        <td>saalswailim@pnu.edu.sa"</td>
                        <td>12345</td>
                        <td><input type="button" value="delete">
                            <input type="button" value="edit">
                        </td>
                    </tr>
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
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>Abeer Faris Ali</td>
                        <td>9669</td>
                        <td>Computer Science</td>
                        <td>2024-2025</td>
                        <td>+96618811111</td>
                        <td> abeer@pnu.edu.sa</td>
                        <td>4547ee7</td>
                        <td><input type="button" value="delete">
                            <input type="button" value="edit">
                        </td>
                    </tr>
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
            <form action="" class="student-create active">
                <div class="formDiv">
                    <label for="Name">Name:</label>
                    <input type="text" name="student-name" id="student-name">
                </div>
                <div class="formDiv">
                    <label for="Name">ID:</label>
                    <input type="text" name="student-id" id="student-id">
                </div>
                <div class="formDiv">
                    <label for="Name">Major:</label>
                    <input type="text" name="student-major" id="student-major">
                </div>
                <div class="formDiv">
                    <label for="Name">Year:</label>
                    <input type="text" name="student-year" id="student-year">
                </div>
                <div class="formDiv">
                    <label for="Name">Phone Number:</label>
                    <input type="number" name="student-phone" id="student-phone">
                </div>
                <div class="formDiv">
                    <label for="Name">Profile Picture:</label>
                    <input type="file" name="student-profile" id="student-profile">
                </div>
                <div class="formDiv">
                    <label for="Name">Email:</label>
                    <input type="email" name="student-email" id="student-email">
                </div>
                <div class="formDiv">
                    <label for="Name">Password:</label>
                    <input type="password" name="student-password" id="student-password">
                </div>
                <div class="formDiv">
                    <input type="button" value="Save">
                    <input type="button" value="Cancel">
                </div>
            </form>
            <form action="" class="doctor-create">
                <div class="formDiv">
                    <label for="Name">Name:</label>
                    <input type="text" name="doctor-name" id="doctor-name">
                </div>
                <div class="formDiv">
                    <label for="Name">Office:</label>
                    <input type="text" name="doctor-office" id="doctor-office">
                </div>
                <div class="formDiv">
                    <label for="Name">Course:</label>
                    <input type="text" name="doctor-course" id="doctor-course">
                </div>
                <div class="formDiv">
                    <label for="Name">Call-forwarding:</label>
                    <input type="number" name="doctor-phone" id="doctor-phone">
                </div>
                <div class="formDiv">
                    <label for="Name">Profile Picture:</label>
                    <input type="file" name="doctor-profile" id="doctor-profile">
                </div>
                <div class="formDiv">
                    <label for="Name">Email:</label>
                    <input type="email" name="doctor-email" id="doctor-email">
                </div>
                <div class="formDiv">
                    <label for="Name">Password:</label>
                    <input type="password" name="doctor-password" id="doctor-password">
                </div>
                <div class="formDiv">
                    <input type="button" value="Save">
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
</body>

</html>