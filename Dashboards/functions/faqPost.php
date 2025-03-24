<?php
// php faq post 

require_once '../../includes/db_config.php';
if(isset($_POST["submit"])){
    $question=$_POST['question'];
    $answer =$_POST['answer'];

    $sql = "insert into `faq` (question, answer) values('$question', '$answer')";

    $result = mysqli_query($conn,$sql);

    header("Location: ../faq-manage.php");

    if($result){
        exit;
    }
    else{
        die(mysqli_errno($conn));
        exit;
    }
}


$conn->close();


?>