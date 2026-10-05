<?php
include("shared/connection.php");
include("shared/sidebar.php");
include("shared/header.php");

?>

<div class="container-fluid">
    <h5 class="card-title text-dark fw-semibold mb-4" >BRANDS</h5>
    <div class="card">
        <div class="card-body">

            <?php
            $sql = "SELECT * FROM brand";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
            ?>
                <table class="table table-bordered">
                    <tr>

                        <th>Brand Id</th>
                        <th>Brand Name</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>

                            <td><?php echo $data["brand_id"] ?></td>
                            <td><?php echo $data["brand_name"] ?></td>
                            <td><a href="edit_brand.php?brand_id=<?php echo $data["brand_id"] ?>" class="btn btn-warning">Update</a>
                                <a href="delete_brand.php?brand_id=<?php echo $data["brand_id"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>

            <?php
            } else {
                echo "No Record Found";
            }
            ?>

        </div>
    </div>
    <a href="add_brand.php" class="btn btn-primary">Add New Brand</a>

</div>
<?php
include("shared/footer.php");
?>