<?php

include("shared/connection.php");
  
$id = $_GET["brand_id"];

$sql = "DELETE FROM brand WHERE brand_id = '{$id}'";
$run = mysqli_query($conn,$sql);

if($run){
    echo "<script>
    alert('Brand Delete Sucessfull!');
    location.href = 'brand.php';
    </script>";
}
?>