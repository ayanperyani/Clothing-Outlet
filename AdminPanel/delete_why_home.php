<?php

include("shared/connection.php");
  
$id = $_GET["why_id"];

$sql = "DELETE FROM why_section_home WHERE why_section_id = '{$id}'";
$run = mysqli_query($conn,$sql);

if($run){
    echo "<script>
    alert('Why Section Delete Sucessfull!');
    location.href = 'why_home.php';
    </script>";
}
?>