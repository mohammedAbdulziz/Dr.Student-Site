<?php
require_once "../../includes/db_config.php";
if(isset($_GET["id"]) && is_numeric($_GET["id"])){
$id=$_GET["id"];
$sql="delete from `students` where id = $id";
$result =mysqli_query($conn,$sql);

if($result){
    header("Location:../admin.php");
    exit;
}
else{
    echo "connection error";
    die(mysqli_errno($conn));
}
}

?>