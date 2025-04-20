<?php 
require_once "../../includes/db_config.php";
// echo "hi hi";

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $id=$_POST["id"];
    $major=$_POST["major"];
    $year=$_POST["year"];
    $phone_number=$_POST["phone_number"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    // echo $name;
    // echo $id;

    $sql = "update `students` set name = '$name', id = $id, major = '$major', year = '$year', phone_number = '$phone_number', email =' $email', password = '$password' where id=$id";
    echo $sql;
    $result=mysqli_query($conn, $sql);

    if($result){
        header("Location:../admin.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

?>