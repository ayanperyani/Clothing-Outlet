<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <h5 class="card-title text-dark fw-semibold mb-4">New Arrivals Home</h5>
    <div class="card">
        <div class="card-body">

            <?php
            $sql = "SELECT * FROM new_arrival_home";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
            ?>
                <table class="table table-bordered">
                    <tr>
                        <th>New Arrival Title</th>
                        <th>New Arrival Paragraph</th>
                        <th>New Arrival Image</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>
                            <td><?php echo $data["new_arrival_title"]; ?></td>
                            <td><?php echo $data["new_arrival_para"]; ?></td>
                            <td><img src="<?php echo $data["new_arrival_img"]; ?>" alt="" width="100px" height="100px"></td>

                            <td>
                                <a href="edit_new_arrivals_home.php?nrh_id=<?php echo $data["new_arrival_id"]; ?>" class="btn btn-warning">Update</a>
                                <a href="delete_new_arrivals_home.php?nrh_id=<?php echo $data["new_arrival_id"]; ?>" class="btn btn-danger">Delete</a>
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
                <a href="add_new_arrivals_home.php" class="btn btn-primary">Add Why Section</a>

</div>
<?php
include("shared/footer.php");
?>