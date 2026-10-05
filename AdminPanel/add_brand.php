<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">ADD BRANDS</h5>
            <div class="card">
              <div class="card-body">

                <form method="POST" onsubmit="return validation()" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                    <input type="text" class="form-control aname" name="b_name" id="exampleInputEmail1" aria-describedby="emailHelp">
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

    $sql = "INSERT INTO brand(brand_name) VALUES('{$brand_name}')";
    $run = mysqli_query($conn,$sql);

    if($run){
       echo "<script>
    alert('Brand Add Successful!');
    location.href='brand.php';
    </script>";
}
}
 








?>