<?php
require_once '../../includes/db_config.php';

if(isset($_GET["id"]) && is_numeric($_GET["id"])){
    $id=$_GET["id"];
    $sql="DELETE FROM doctors WHERE id= $id";
    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location: ../admin.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>