<?php
// php faq post 

require_once '../../includes/db_config.php';

if(isset($_GET["id"]) && is_numeric($_GET["id"])){
    $faq_id=$_GET["id"];
    echo $faq_id;
    $sql="DELETE FROM faq where id = $faq_id";
    $result = mysqli_query($conn,$sql);

    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $faq_id);

    header("Location: ../faq-manage.php");
    $stmt->close();
    exit;

    // if($result){
    //     exit;
    // }
    // else{
    //     die(mysqli_errno($conn));
    //     exit;
    // }
}

$conn->close();


?>