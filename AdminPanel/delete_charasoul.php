<?php

include("shared/connection.php");
  
$id = $_GET["chara_id"];

$sql = "DELETE FROM charasoul WHERE charasoul_id = '{$id}'";
$run = mysqli_query($conn,$sql);

if($run){
    echo "<script>
    alert('Charasoul Delete Sucessfull!');
    location.href = 'charasoul.php';
    </script>";
}
?>