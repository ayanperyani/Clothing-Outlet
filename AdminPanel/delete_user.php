<?php
include("shared/connection.php");


$id = $_GET["user_id"];

$sql = "DELETE FROM users WHERE user_id = '{$id}'";
$run = mysqli_query($conn,$sql);
if($run){
    echo "<script>
    alert('User Delete Successful!');
    location.href='users.php';
    </script>";
}




?>