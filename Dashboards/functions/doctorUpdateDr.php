<?php 
require_once "../../includes/db_config.php";

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $id=$_POST["id"];
    $office=$_POST["office"];
    $course=$_POST["course"];
    $phone_number=$_POST["phone_number"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="update `doctors` set name='$name', id=$id, office='$office', course='$course', phone_number='$phone_number', email='$email', password='$password' where id = $id";

    $result=mysqli_query($conn, $sql);

    if($result){
        header("Location:../doctor-pg.php?id=$id");
        
    }
    else{
        die(mysqli_error($conn));
    }
}
?>