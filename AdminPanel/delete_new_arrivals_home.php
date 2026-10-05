<?php
include("shared/connection.php");


$id = $_GET["nrh_id"];

$sql = "DELETE FROM new_arrival_home WHERE new_arrival_id = '{$id}'";
$run = mysqli_query($conn,$sql);
if($run){
    echo "<script>
    alert('New Arrivals Home Delete Successful!');
    location.href='new_arrival_home.php';
    </script>";
}




?>