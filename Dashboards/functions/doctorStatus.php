<?php
require_once "../../includes/db_config.php";
echo "hi";

if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];
    echo $id;
    $sql = "update `doctor_schedule` set status = '$status' where id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:../doctor-pg.php?id=$id");
    } else {
        die(mysqli_error($conn));
    }
} else {
    echo "error";
}
?>