<?php
require_once "../../includes/db_config.php";
$search_term = isset($_GET["search_term"]) ? $_GET["search_term"] : "";

// $search_term = mysqli_real_escape_string($conn, $search_term);

echo $search_term;
print_r($search_term);

if($search_term==""){
    $search_term="sdffffffffffffadfsdfdfsfffffffffffffffffffadfafsfafaf";
}

$sql = "SELECT * FROM doctors WHERE name LIKE '%" . $search_term . "%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id= " . $row['id'] . ", name= " . $row['name'];
        header("Location:../doctor-profile-search.php?id=".$row['id']);
    }
} else {
   header("Location:../../index.php");
}
