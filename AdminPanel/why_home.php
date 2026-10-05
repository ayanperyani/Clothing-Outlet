<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <h5 class="card-title text-dark fw-semibold mb-4">Why Section</h5>
    <div class="card">
        <div class="card-body">

            <?php
            $sql = "SELECT * FROM why_section_home";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
            ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Why Section Image</th>
                        <th>Why Section Title</th>
                        <th>Why Section Paragrah</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>
                            <td><img src="<?php echo $data["why_section_img"]; ?>" alt="" width="100px" height="100px"></td>
                            <td><?php echo $data["why_section_title"]; ?></td>
                            <td><?php echo $data["why_section_para"]; ?></td>
                            <td><a href="edit_why_home.php?why_id=<?php echo $data["why_section_id"]; ?>" class="btn btn-warning">Update</a>
                                <a href="delete_why_home.php?why_id=<?php echo $data["why_section_id"]; ?>" class="btn btn-danger">Delete</a>
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
                <a href="add_why_home.php" class="btn btn-primary">Add Why Section</a>

</div>
<?php
include("shared/footer.php");
?>