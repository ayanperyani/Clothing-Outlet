<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");


$id = $_GET["brand_id"];

$sql = "SELECT * FROM   brand WHERE brand_id = '{$id}'";
$run = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($run);



?>



<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Brand</h5>
            <div class="card">
              <div class="card-body">
                
                <form method="POST" onsubmit="return validation()" >
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand ID</label>
                    <input type="hidden" class="form-control aname" name="b_id" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["brand_id"] ?>">
                    <span id="p1" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                    <input type="text" class="form-control aname" name="b_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $data["brand_name"] ?>">
                    <span id="p1" class="text-danger"></span>
                  </div>
                
                  <button type="submit" class="btn btn-primary" name="btn">Add Brand</button>
                </form>
              </div>
            </div>
           
          </div>
        </div>
<?php
include("shared/footer.php");
?>
<?php
if(isset($_POST["btn"])){
    $brand_name = $_POST["b_name"];

    $update = "UPDATE brand SET brand_name = '{$brand_name}' WHERE brand_id = '{$id}'";

    $runn = mysqli_query($conn,$update);

    if($runn){
       echo "<script>
    alert('Brand Updated Successful!');
    location.href='brand.php';
    </script>";
}
}
 








?>