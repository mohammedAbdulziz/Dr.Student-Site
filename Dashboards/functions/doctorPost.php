<?php
require_once("../../includes/db_config.php");

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $id=$_POST["id"];
    $office=$_POST["office"];
    $course=$_POST["course"];
    $phone_number=$_POST["phone_number"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="insert into `doctors` (name, id, office, course, phone_number, email, password) values('$name','$id','$office', '$course', '$phone_number', '$email', '$password')";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("Location:../admin.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>