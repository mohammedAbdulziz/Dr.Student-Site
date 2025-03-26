<?php 
require_once "../../includes/db_config.php";



if(isset($_POST["submit"])){
$id=$_POST["id"];
$sat_fs=$_POST["sat_fs"];
$sat_fe=$_POST["sat_fe"];
$sat_ss=$_POST["sat_ss"];
$sat_se=$_POST["sat_se"];
$sun_fs=$_POST["sun_fs"];
$sun_fe=$_POST["sun_fe"];
$sun_ss=$_POST["sun_ss"];
$sun_se=$_POST["sun_se"];
$mon_fs=$_POST["mon_fs"];
$mon_fe=$_POST["mon_fe"];
$mon_ss=$_POST["mon_ss"];
$mon_se=$_POST["mon_se"];
$tue_fs=$_POST["tue_fs"];
$tue_fe=$_POST["tue_fe"];
$tue_ss=$_POST["tue_ss"];
$tue_se=$_POST["tue_se"];
$wed_fs=$_POST["wed_fs"];
$wed_fe=$_POST["wed_fe"];
$wed_ss=$_POST["wed_ss"];
$wed_se=$_POST["wed_se"];
$thu_fs=$_POST["thu_fs"];
$thu_fe=$_POST["thu_fe"];
$thu_ss=$_POST["thu_ss"];
$thu_se=$_POST["thu_se"];


$sql="Update `doctor_schedule` set sat_fs='$sat_fs', sat_fe='$sat_fe', sat_ss='$sat_ss', sat_se='$sat_se', sun_fs='$sun_fs', sun_fe='$sun_fe', sun_ss='$sun_ss', sun_se='$sun_se', mon_fs='$mon_fs', mon_fe='$mon_fe', mon_ss='$mon_ss', mon_se='$mon_se', tue_fs='$tue_fs', tue_fe='$tue_fe', tue_ss='$tue_ss', tue_se='$tue_se', wed_fs='$wed_fs', wed_fe='$wed_fe', wed_ss='$wed_ss', wed_se='$wed_se', thu_fs='$thu_fs', thu_fe='$thu_fe', thu_ss='$thu_ss', thu_se='$thu_se' where id=$id";

$result=mysqli_query($conn, $sql);

if($result){
    header("Location:../doctor-pg.php?id=$id");
}
else{
    die(mysqli_error($conn));
}
}

?>
