<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <h5 class="card-title text-dark fw-semibold mb-4">USERS</h5>
    <div class="card">
        <div class="card-body">

            <?php
            $sql = "SELECT * FROM product";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
            ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Img</th>
                        <th>Brand Id</th>
                        <th>New Arrival Id</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>
                            <td><?php echo $data["product_name"] ?></td>
                            <td><?php echo $data["product_price"] ?></td>
                            <td><?php echo $data["product_img"] ?></td>
                            <td><?php echo $data["brand_id"] ?></td>
                            <td><?php echo $data["new_arrival_id"] ?></td>
                            <td><a href="edit_product.php?pro_id=<?php echo $data["product_id"] ?>" class="btn btn-light-warning">Edit</a>
                            <a href="delete_product.phppro_id=<?php echo $data["product_id"] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php
            } else {
                echo "No Record Found";
            }
            ?>

        </div>
         <!-- <a href="add_product.php" class="btn btn-primary">Add Products</a> -->

    </div>
    <a href="add_product.php" class="btn btn-primary">Add Products</a>
</div>
<?php
include("shared/footer.php");
?>