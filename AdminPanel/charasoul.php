<?php
include("shared/sidebar.php");
include("shared/header.php");
include("shared/connection.php");
?>

<div class="container-fluid">
    <h5 class="card-title text-dark fw-semibold mb-4" >CHARASOUL</h5>
    <div class="card">
        <div class="card-body">

            <?php
            $sql = "SELECT * FROM charasoul";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
            ?>
                <table class="table table-bordered">
                    <tr>
                        <th>Hero Title</th>
                        <th>Hero Sub Title</th>
                        <th>Hero Paragraph</th>
                        <th>Hero Img</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>
                            <td><?php echo $data["charasoul_title"]; ?></td>
                            <td><?php echo $data["charasoul_subtitle"]; ?></td>
                            <td><?php echo $data["charasoul_para"]; ?></td>
                            <td><img src="<?php echo $data["charasoul_img"];?>" alt="" width="100px" height="100px"></td>

                            <td><a href="edit_charasoul.php?chara_id=<?php echo $data["charasoul_id"];?>" class="btn btn-warning">Update</a>
                                <a href="delete_charasoul.php?chara_id=<?php echo $data["charasoul_id"];?>" class="btn btn-danger">Delete</a>
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
                 <a href="add_charasoul.php" class="btn btn-primary">Add Charasoul</a>

</div>
<?php
include("shared/footer.php");
?>