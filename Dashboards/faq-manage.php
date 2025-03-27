<?php require_once '../includes/db_config.php';
$query_faq = "select * from faq";
$result_faq = mysqli_query($conn, $query_faq);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Reminder</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./style/doctor-pg.css">
    <link rel="stylesheet" href="./style/faq-manage.css">
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
                    <a href="../Dashboards/admin.php" id="logOutBtn">Go Back</a>
                </li>
            </ul>
            <h1>Doctors Reminder</h1>
        </div>
    </header>
    <main>
        <div id="faq-container">
            <h1>Frequently Asked Questions</h1>
            <input type="button" value="Add FAQ" id="add-faq">
            <div class="faq-item faqAdd">
                <form action="/Dashboards/functions/faqPost.php" method="post">
                    <input type="text" name="question" id="addQst" placeholder="Question">
                    <textarea name="answer" id="addAns" placeholder="Answer"></textarea>
                    <input type="submit" value="Add" name="submit">
                </form>
            </div>
            <!-- <div class="faq-item">
                <div class="question">
                    <span>How can I contact my professor if I have questions about the course?</span>
                </div>
                <div class="answer">You can contact your professor via email or during their office hours.
                    Professors typically provide their contact information and office hours in the course syllabus.
                    Additionally, some professors may use the university's learning management system (LMS) to
                    communicate with students. Always ensure that your communication is polite and professional.
                </div>
                <div class="edits">
                    <input type="button" value="Delete" class="remove-faq">
                </div>
            </div> -->
            <!-- above is how faq-item div looks like -->
            <?php
            while ($row = mysqli_fetch_assoc($result_faq)) {
            ?>
                <div class="faq-item">
                    <div class="question">
                        <span>
                            <?php
                            echo $row["question"];
                            ?>
                        </span>
                    </div>
                    <div class="answer">
                        <?php
                        echo $row["answer"];
                        ?>
                    </div>
                    <div class="edits">
                        <a href=<?php echo "/Dashboards/functions/faqDelete.php?id=" . $row['id'] ?> class='remove-faq'>Delete</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
    <footer>
        <div id="contactInfo">
            <p><i class="fa-solid fa-envelope"></i> pnu-tawasul@pnu.edu.sa</p>
            <p><i class="fa-solid fa-phone"></i> +966-11-8220000</p>
            <p><i class="fa-solid fa-location-dot"></i> Airport Road, King Khalid International Airport, Riyadh
                11564,
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
    <script src="../Dashboards/scripts/faq-manage.js"></script>
</body>

</html>