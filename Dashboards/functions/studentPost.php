<?php
require_once("../../includes/db_config.php");


echo $_POST["email"];



if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $id=$_POST["id"];
    $major=$_POST["major"];
    $year=$_POST["year"];
    $phone_number=$_POST["phone_number"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    

    $sql= "insert into `students` (name, id, major, year, phone_number, email, password) values('$name', '$id', '$major', '$year', '$phone_number', '$email', '$password')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: ../admin.php");
    }
    else{
        die(mysqli_errno($conn));
    }
}
?>