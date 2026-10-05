<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">ADD PRODUCT</h5>
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" class="form-control c_title" name="p_name" id="" aria-describedby="emailHelp">
                            <span id="p1" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Price</label>
                            <input type="text" class="form-control c_subtitle" name="p_price" id="" aria-describedby="emailHelp">
                            <span id="p2" class="text-danger"></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Select Brand</label>
                            <select name="pro_brand" id="" class="form-control artist">
                                <?php
                                $sql = "SELECT * FROM brand";
                                $run = mysqli_query($conn, $sql);
                                ?>
                                <option value="">Select Your Brand</option>
                                <?php
                                while ($data = mysqli_fetch_assoc($run)) {
                                ?>
                                    <option value="<?php echo $data["brand_id"] ?>"><?php echo $data["brand_name"] ?></option>


                                <?php } ?>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Select New Arrival</label>
                            <select name="pro_arrival" id="" class="form-control artist">
                                <?php
                                $sql = "SELECT * FROM new_arrival_product";
                                $run = mysqli_query($conn, $sql);
                                ?>
                                <option value="">Select New Arrival</option>
                                <?php
                                while ($data = mysqli_fetch_assoc($run)) {
                                ?>
                                    <option value="<?php echo $data["new_arrival_id"] ?>"><?php echo $data["new_arrival_name"] ?></option>


                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Image</label>
                            <input type="file" class="form-control c_image" name="p_img" id="" aria-describedby="emailHelp">
                            <span id="p4" class="text-danger"></span>
                        </div>


                        <button type="submit" class="btn btn-primary" name="pro_btn">Add Product</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<?php
include("shared/footer.php");
?>
<?php
if (isset($_POST["pro_btn"])) {
    $pro_name = $_POST["p_name"];
    $pro_price = $_POST["p_price"];
    $pro_brand = $_POST["pro_brand"];
    $pro_arrivals = $_POST["pro_arrival"];
    $pro_img = $_FILES["p_img"];

    $filename = $_FILES["p_img"]["name"];
    $tmpname = $_FILES['p_img']['tmp_name'];
    $type = $_FILES["p_img"]["type"];
    $location = "../UserPanel/shared/upload/" . $filename;


    if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/JPG" || $type == "image/JPEG" || $type == "image/PNG") {
        move_uploaded_file($tmpname, $location);
    } else {
        echo "<script>alert('File Format Could Not Be Supported')</script>";
        echo "<script>location.href = 'add_product.php'</script>";
        return false;
    }
    $sql = "INSERT INTO product (product_name , product_price , product_img , brand_id , new_arrival_id  ) VALUES('{$pro_name}' , '{$pro_price}' , '{$location}' , '{$pro_brand}' , '{$pro_arrivals}')";
    $run = mysqli_query($conn, $sql);

    if ($run) {
        echo "<script>
    alert('Product Add Successful!');
    location.href='product.php';
    </script>";
    }
}









?>